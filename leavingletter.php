<?php
    
    require('connect.php');

    header("Content-type:application/pdf");

    include 'mailer/send-mail.php';
    require('fpdf/fpdf.php');

    // ***********************************************************************************
                            // http://www.fpdf.org/en/script/script3.php
    // ***********************************************************************************

    // $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));


    class PDF_MC_Table extends FPDF
    {
        var $widths;
        var $aligns;

        public $name,$branch,$rollno,$level,$date,$dol,$intro,$sign,$content;

        function __construct($name,$branch,$rollno,$level,$date,$dol,$intro,$sign,$content)
        {
            parent::__construct();

            $this->name = $name;
            $this->branch = $branch;
            $this->rollno = $rollno;
            $this->level = $level;
            $this->date = $date;
            $this->dol = $dol;
            $this->intro = $intro;
            $this->sign = $sign;
            $this->content = $content;
        }

        // Page header
        function Header()
        {
            // Logo
            // $this->Image('Logo.png',10,10,20);
            // Times bold 15
            $this->SetFont('Times','B',30);
            // Title
            $this->Cell(0,10,'PADMASRI KALAMANDIR',0,1,'C');
            $this->SetFont('Times','B',15);
            $this->Cell(0,10,'A TEMPLE OF CLASSICAL DANCE',0,1,'C');

            $this->Ln(2);
        }

        function Body()
        {
            $this->AddPage();
            $this->Image('letterhead.jpg',0,0,210,297);
            $this->SetFont('Times','',14);
            
            // Line break
            $this->Ln(20);

            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'LEAVING CERTIFICATE',0,1,'C');

            $d1 = new DateTime($this->date);
            $d2 = new DateTime($this->dol);
            $n = $d2->diff($d1);

            // Line break
            $this->Ln(10);

            // Intro
            $this->SetFont('Times','',14);
            $intro_temp = explode("#",$this->intro);
            $this->MultiCell(0,5,$intro_temp[0].$this->name.$intro_temp[1].$n->y.$intro_temp[2]);

            // TABLE
            $this->SetLeftMargin(55);
            $this->SetWidths(array(50,50));

            // Line break
            $this->Ln(10);

            // BODY
            $this->SetFont('Times','',14);
            $this->Row(array('Student Name', $this->name),1);
            $this->Row(array('Roll Number', $this->rollno),1);
            $this->Row(array('Level', $this->level),1);
            $this->Row(array('Date of Joining', $this->date),1);
            $this->Row(array('Date of Leaving', $this->dol),1);

            $this->SetLeftMargin(10);
            $this->SetFont('Times','',14);
            $this->Cell(0,5,'',0,1,'C');
            $this->Ln(10);

            // Sign
            $this->Ln(30);
            $this->MultiCell(0,5,$this->sign);

            // Line Break
            $this->Ln(10);

            // Note
            $this->SetFont('Times','',12);
            $this->MultiCell(0,5,'* See Annexure below - Portions Covered');
            // ***************************************************************************************


            // ANNEXURE - III
            $this->AddPage();
            $this->Image('letterhead.jpg',0,0,210,297);

            // Line Break
            $this->Ln(20);


            // TABLE
            $this->SetLeftMargin(15);
            $this->SetWidths(array(30,150));


            // HEADER
            $this->SetFont('Times','B',10);
            $this->Cell(30,8,'LEVEL',1,0,'C');
            $this->Cell(150,8,'PORTIONS COVERED',1,1,'C');


            // // CONTENT
            // $this->SetFont('Times','',12);
      
            $portionscov = $this->content;
            $counter = 1;
            while($counter < $this->level and $row = $portionscov->fetch_assoc())
            {
                  $p = $row['portions'];
                  $this->Row(array('LEVEL - '.($counter), $p),2);

                  $counter = $counter + 1;
            }
            $row = $portionscov->fetch_assoc();
            $p = $row['portions'];
            $this->Row(array('LEVEL - '.($counter), $p),2);
            // ***************************************************************************************
        }

        // Page footer
        function Footer()
        {
            // // Position at 1.5 cm from bottom
            // $this->SetY(-15);
            // // Arial italic 8
            // $this->SetFont('Arial','I',8);
            // // Page number
            // $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
        }  

        function SetWidths($w)
        {
            //Set the array of column widths
            $this->widths=$w;
        }

        function SetAligns($a)
        {
            //Set the array of column alignments
            $this->aligns=$a;
        }

        function Row($data, $val=0)
        {
            //Calculate the height of the row
            $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
            $h=6*$nb;
            //Issue a page break first if needed
            $this->CheckPageBreak($h);
            //Draw the cells of the row
            for($i=0;$i<count($data);$i++)
            {
                $w=$this->widths[$i];
                
                //Save the current position
                $x=$this->GetX();
                $y=$this->GetY();
                //Draw the border
                $this->Rect($x,$y,$w,$h);
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'C';

                if($val == 1 && $i == 0)
                {
                    $this->SetFont('Times','B',14);
                    // $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
                }
                else
                {
                    $this->SetFont('Times','',14);
                    // $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'C';
                }

                if($val == 2)
                {
                    $this->SetFont('Times','',10);
                }

                //Print the text
                $this->MultiCell($w,6,$data[$i],0,$a);
                //Put the position to the right of the cell
                $this->SetXY($x+$w,$y);
            }
            //Go to the next line
            $this->Ln($h);
        }

        function CheckPageBreak($h)
        {
            //If the height h would cause an overflow, add a new page immediately
            if($this->GetY()+$h>$this->PageBreakTrigger)
                $this->AddPage($this->CurOrientation);
        }

        function NbLines($w,$txt)
        {
            //Computes the number of lines a MultiCell of width w will take
            $cw=&$this->CurrentFont['cw'];
            if($w==0)
                $w=$this->w-$this->rMargin-$this->x;
            $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
            $s=str_replace("\r",'',$txt);
            $nb=strlen($s);
            if($nb>0 and $s[$nb-1]=="\n")
                $nb--;
            $sep=-1;
            $i=0;
            $j=0;
            $l=0;
            $nl=1;
            while($i<$nb)
            {
                $c=$s[$i];
                if($c=="\n")
                {
                    $i++;
                    $sep=-1;
                    $j=$i;
                    $l=0;
                    $nl++;
                    continue;
                }
                if($c==' ')
                    $sep=$i;
                $l+=$cw[$c];
                if($l>$wmax)
                {
                    if($sep==-1)
                    {
                        if($i==$j)
                            $i++;
                    }
                    else
                        $i=$sep+1;
                    $sep=-1;
                    $j=$i;
                    $l=0;
                    $nl++;
                }
                else
                    $i++;
            }
            return $nl;
        }
    }

    if(isset($_POST["arr"]))  // will be used for Mailing purpose
    {   
        $data = [];
        $arr = [];

        $arr = $_POST["arr"]; // list of alll selected roll numbers

        $sent = "";
        $notsent = "";
        $status = 0; 
        
       
        for($i=0;$i<count($arr);$i++)
        {

            $temp = $arr[$i];
            $roll = str_replace(' ', '', $temp); // Removes all spaces

            $d = $mysqli->query("SELECT * FROM student where roll_no='$roll'") or die($mysqli->error);
            $r = $d->fetch_assoc();
            $pi_id = $r['pi_id'];
            $p_id = $r['p_id'];
            $p = $mysqli->query("SELECT * FROM personal where pi_id='$pi_id'") or die($mysqli->error);
            $per = $p->fetch_assoc();


            $pdf = $mysqli->query("SELECT * FROM portions where level='0'") or die($mysqli->error);
            $row = $pdf->fetch_assoc();
            $sign = $row['portions'];


            $level = $r['level'];
            $name = $per['name'];
            $branch = $r['centre'];
            $rollno = $roll;
            $year = date("Y");
            $date = $r['doj'];
            $dol = date("Y-m-d");


            $pdf = $mysqli->query("SELECT * FROM portions where level='-2' and term='0'") or die($mysqli->error);
            $row = $pdf->fetch_assoc();
            $intro = $row['portions'];

            $content = $mysqli->query("SELECT * FROM portions where level='-2' and term ='$level'") or die($mysqli->error);
            $row = $content->fetch_assoc();

            $content = $mysqli->query("SELECT * FROM portions where level='-2' and term !='0' order by term") or die($mysqli->error);


            $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$date,$dol,$intro,$sign,$content);
            $pdf->SetFont('Times','',12);
            $pdf->Body();

            // Year / Branch / Level / Name
            $dir = "Documents/".$year."/".$branch."/".$level."/".$name;
            if (!file_exists($dir))
            {
                mkdir($dir, 0777, true);
            }
            $filename = $dir."/Leaving_Letter_L-".$level.".pdf";
            $pdf->Output('F', $filename, true); // save into the folder of the script


            // Sending mail to the student and parents
            $parentcollection = $mysqli->query("SELECT * FROM parents where p_id='$p_id'") or die($mysqli->error);
            $parents = $parentcollection->fetch_assoc();
            $fmail = $parents['fmail'];
            $fname = $parents['fname'];

            $mailtype = "leavingletter";

            // Function call to send mail here
            $status = mailing($fmail, $fname, $mailtype, $filename);

            $tempdata = $name." --- ".$rollno;
            if($status == 1)
            {
                $sent = $sent."\n".$tempdata;
            }
            else
            {
                $notsent = $notsent."\n".$tempdata;
            }
        }

        // $data += array('sent' => $sent);
        // $data += array('notsent' => $notsent);

        echo json_encode($data);
    }

    else if(isset($_POST["leavingletter"]))  //// used for viewing
    {   
        $data = [];
        $level = $_POST["leavingletter"];

        $pdf = $mysqli->query("SELECT * FROM portions where level='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $sign = $row['portions'];

        $name = 'Student';
        $branch = 'XX';
        $rollno = '0000XX000X';
        $year = date("Y");
        $date = date("Y-m-d");
        $dol = date("Y-m-d");

        $temp = $mysqli->query("SELECT * FROM portions where level='-2' and term='0'") or die($mysqli->error);
        $row = $temp->fetch_assoc();
        $intro = $row['portions'];

        $data += array('intro' => $intro);
        $data += array('sign' => $sign);

        $content = $mysqli->query("SELECT * FROM portions where level='-2' and term ='$level'") or die($mysqli->error);
        $row = $content->fetch_assoc();
        $data += array('portionscov' => $row['portions']);
        $data += array('level' => $level);

        $content = $mysqli->query("SELECT * FROM portions where level='-2' and term !='0' order by term") or die($mysqli->error);

        $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$date,$dol,$intro,$sign,$content);
        // $pdf = new PDF_MC_Table();
        $pdf->SetFont('Times','',12);
        $pdf->Body();
        $spdf = $pdf->Output('','s');

        $data = array_map('utf8_encode', $data);

        $spdf = base64_encode($spdf);
        $data += array('pdf' => $spdf);

        echo json_encode($data);
    }

    else if(!empty($_POST)) /// used for update
    {
        $data = [];
        $name = 'Student';
        $branch = 'XX';
        $rollno = '2020XX000D';
        $date = date("d/m/Y");
        $dol = date("Y-m-d");

        $intro = $_POST["ll_intro"];
        $sign = $_POST["ll_sign"];
        $content = $_POST["ll_portions"];
        $level = $_POST["ll_level"];

        $mysqli->query("UPDATE portions SET portions='$sign' where level='0' and term='1'") or die($mysqli->error());
        $mysqli->query("UPDATE portions SET portions='$intro' where level='-2' and term='0'") or die($mysqli->error());
        $mysqli->query("UPDATE portions SET portions='$content' where level='-2' and term='$level'") or die($mysqli->error());

        $data += array('intro' => $intro);
        $data += array('sign' => $sign);
        $data += array('portionscov' => $content);
        $data += array('level' => $level);
 
        $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$date,$dol,$intro,$sign,$content);
        // $pdf = new PDF_MC_Table();
        $pdf->SetFont('Times','',12);
        $pdf->Body();
        $spdf = $pdf->Output('','s');

        $data = array_map('utf8_encode', $data);

        $spdf = base64_encode($spdf);
        $data += array('pdf' => $spdf);

        echo json_encode($data);
    }
?>