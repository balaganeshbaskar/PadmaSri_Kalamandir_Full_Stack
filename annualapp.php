<?php
    
    header("Content-type:application/pdf");

    require('mailer/send-mail.php');
    require('fpdf/fpdf.php');
    require('connect.php');

    // ***********************************************************************************
                            // http://www.fpdf.org/en/script/script3.php
    // ***********************************************************************************

    // $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));


    class PDF_MC_Table extends FPDF
    {
        var $widths;
        var $aligns;

        public $name,$branch,$rollno,$level,$year,$date,$intro,$note,$sign,$portions_1,$portions_2;

        function __construct($name,$branch,$rollno,$level,$year,$date,$intro,$note,$sign,$portions_1,$portions_2)
        {
            parent::__construct();

            $this->name = $name;
            $this->branch = $branch;
            $this->rollno = $rollno;
            $this->level = $level;
            $this->year = $year;
            $this->date = $date;
            $this->intro = $intro;
            $this->note = $note;
            $this->sign = $sign;
            $this->portions_1 = $portions_1;   
            $this->portions_2 = $portions_2;
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
            $this->SetFont('Times','',12);

            // Line break
            $this->Ln(20);

            $this->SetFont('Times','B',12);
            $this->Cell(0,10,'Student Name: '.$this->name,0,0,'L');
            $this->SetFont('Times','',12);
            $this->Cell(0,10,'Date(d/m/y): '.$this->date,0,0,'R');
            $this->Ln(5);
            $this->SetFont('Times','B',12);
            $this->Cell(0,10,'Roll Number: '.$this->rollno,0,0,'L');
            $this->SetFont('Times','',12);
            $this->Cell(0,10,'Branch: '.$this->branch,0,0,'R');
            $this->Ln(5);
            $this->Cell(0,10,'Level: '.$this->level,0,1,'R');
            
            // Line break
            $this->Ln(10);

            // Intro
            $this->MultiCell(0,5,$this->intro);
        
            $this->Ln(2);
            $this->SetFont('Times','B',12);
            $this->Cell(0,10,'ANNUAL APPRAISAL ('.($this->year-1).' - '.$this->year.')',0,1,'C');


            // TABLE
            $this->SetWidths(array(70,120));

            // HEADER
            $this->SetFont('Times','B',10);
            $this->Cell(70,8,'TERM',1,0,'C');
            $this->Cell(120,8,'PORTIONS COVERED',1,1,'C');

            // BODY
            $this->SetFont('Times','',11);

            $this->Row(array('Term 1', $this->portions_1));
            $this->Row(array('Term 2', $this->portions_2));

            $this->Ln(10);
            

            // Note
            $this->SetFont('Times','',12);
            $this->MultiCell(0,5,$this->note);


            // Sign
            $this->Ln(5);
            $this->MultiCell(0,5,$this->sign);
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

        function Row($data)
        {
            //Calculate the height of the row
            $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
            $h=5*$nb;
            //Issue a page break first if needed
            $this->CheckPageBreak($h);
            //Draw the cells of the row
            for($i=0;$i<count($data);$i++)
            {
                $w=$this->widths[$i];
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
                //Save the current position
                $x=$this->GetX();
                $y=$this->GetY();
                //Draw the border
                $this->Rect($x,$y,$w,$h);
                //Print the text
                $this->MultiCell($w,5,$data[$i],0,$a);
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

    if(isset($_POST["annualapp"]))  
    {   
        $data = [];
        $arr = [];

        $arr = $_POST["arr"];

        $sent = "";
        $notsent = "";
        $status = 0; 

        for($i=0;$i<count($arr);$i++)
        {
            $temp = $arr[$i];   // using only first roll number from the list.

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
            $date = date("d/m/Y");

            $pdf = $mysqli->query("SELECT * FROM portions where level='$level' and term='0'") or die($mysqli->error);
            $row = $pdf->fetch_assoc();
            $intro = $row['portions'];
            

            $pdf = $mysqli->query("SELECT * FROM portions where level='$level' and term!='0'") or die($mysqli->error);
            $row = $pdf->fetch_assoc();
            $portions_1 = $row['portions'];
            $row = $pdf->fetch_assoc();
            $portions_2 = $row['portions'];
            $row = $pdf->fetch_assoc();
            $note = $row['portions'];

            // $data += array('level' => $level);
            // $data += array('portions_1' => $portions_1);
            // $data += array('portions_2' => $portions_2);
            // $data += array('intro' => $intro);
            // $data += array('note' => $note);
            // $data += array('sign' => $sign);

            $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$year,$date,$intro,$note,$sign,$portions_1,$portions_2);
            $pdf->SetFont('Times','',12);
            $pdf->Body();

            // Year / Branch / Level / Name
            $dir = "Documents/".$year."/".$branch."/".$level."/".$name;
            if (!file_exists($dir))
            {
                mkdir($dir, 0777, true);
            }
            $filename = $dir."/Annual_Appraiasal_L-".$level.".pdf";
            $pdf->Output('F', $filename, true); // save into the folder of the script

            // Sending mail to the student and parents
            $parentcollection = $mysqli->query("SELECT * FROM parents where p_id='$p_id'") or die($mysqli->error);
            $parents = $parentcollection->fetch_assoc();
            $fmail = $parents['fmail'];
            $fname = $parents['fname'];

            $mailtype = "annualappraisal";

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
            // $spdf = $pdf->Output('','s');

            // $data = array_map('utf8_encode', $data);

            // $spdf = base64_encode($spdf);
            // $data += array('pdf' => $spdf);
        }
        

        echo json_encode($data);
    }

    else if(isset($_POST["ap"]))  
    {   
        $data = [];
        $arr = [];
        $level = $_POST["ap"];

        $pdf = $mysqli->query("SELECT * FROM portions where level='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $sign = $row['portions'];

        $name = 'Student';
        $branch = 'XX';
        $rollno = '0000XX000X';
        $year = date("Y");
        $date = date("d/m/Y");

        $pdf = $mysqli->query("SELECT * FROM portions where level='$level' and term='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $intro = $row['portions'];
        

        $pdf = $mysqli->query("SELECT * FROM portions where level='$level' and term!='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $portions_1 = $row['portions'];
        $row = $pdf->fetch_assoc();
        $portions_2 = $row['portions'];
        $row = $pdf->fetch_assoc();
        $note = $row['portions'];

        $data += array('level' => $level);
        $data += array('portions_1' => $portions_1);
        $data += array('portions_2' => $portions_2);
        $data += array('intro' => $intro);
        $data += array('note' => $note);
        $data += array('sign' => $sign);


        $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$year,$date,$intro,$note,$sign,$portions_1,$portions_2);
        // $pdf = new PDF_MC_Table();
        $pdf->SetFont('Times','',12);
        $pdf->Body();
        $spdf = $pdf->Output('','s');

        $data = array_map('utf8_encode', $data);

        $spdf = base64_encode($spdf);
        $data += array('pdf' => $spdf);

        echo json_encode($data);
    }

    else if(!empty($_POST))
    {
        $data = [];
        $name = 'Student';
        $branch = 'XX';
        $rollno = '2020XX000D';
        $year = date("Y");
        $date = date("d/m/Y");

        $level = $_POST["ap_level"];
        $intro = $_POST["ap_intro"];
        $portions_1 = $_POST["ap_portions_1"];
        $portions_2 = $_POST["ap_portions_2"];
        $note = $_POST["ap_note"];
        $sign = $_POST["ap_sign"];

        $mysqli->query("UPDATE portions SET portions='$sign' where level='0' and term='1'") or die($mysqli->error());

        $mysqli->query("UPDATE portions SET portions='$intro' where level='$level' and term='0'") or die($mysqli->error());
        $mysqli->query("UPDATE portions SET portions='$portions_1' where level='$level' and term='1'") or die($mysqli->error());
        $mysqli->query("UPDATE portions SET portions='$portions_2' where level='$level' and term='2'") or die($mysqli->error());
        $mysqli->query("UPDATE portions SET portions='$note' where level='$level' and term='3'") or die($mysqli->error());


        $data += array('level' => $level);
        $data += array('portions_1' => $portions_1);
        $data += array('portions_2' => $portions_2);
        $data += array('intro' => $intro);
        $data += array('note' => $note);
        $data += array('sign' => $sign);
 
        $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$year,$date,$intro,$note,$sign,$portions_1,$portions_2);
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