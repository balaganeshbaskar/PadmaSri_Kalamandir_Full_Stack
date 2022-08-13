<?php
    require('fpdf.php');

    $mysqli = new mysqli('localhost', 'root', '', 'psk') or die(mysqli_error($mysqli));

    // ***********************************************************************************
                            // http://www.fpdf.org/en/script/script3.php
    // ***********************************************************************************
    
    if(isset($_POST["annualapp"]))  
    {   
        $data = [];

        $p = $mysqli->query("SELECT * FROM portions where level='1'") or die($mysqli->error);
        $row = $p->fetch_assoc();

        $data += array('level' => $row['level']);
        $data += array('term' => $row['term']);
        $data += array('portions' => $row['portions']);

        $pdf = $mysqli->query("SELECT * FROM portions where level='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $data += array('intro' => $row['portions']);
        $row = $pdf->fetch_assoc();
        $data += array('note' => $row['portions']);
        $row = $pdf->fetch_assoc();
        $data += array('sign' => $row['portions']);

        $arr = array_map('utf8_encode', $data);

        echo json_encode($arr);  
    }


    class PDF_MC_Table extends FPDF
    {
        var $widths;
        var $aligns;

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
            $this->Cell(0,10,'A TEMPLE OF CLASSICAL DANCE AND MUSIC',0,1,'C');

            $this->Ln(2);
        }


        function Body()
        {
            $name = 'Student Name';
            $branch = 'Branch';
            $rollno = 'YYYYCC000D';
            $level = 'Level';
            $nextlevel = '';
            $year = date("Y");
            $date = date("d/m/Y");
            $fee = '900';

            switch($level) 
            {
                case '1':
                    $nextlevel = '2';
                    break;
                case "2":
                    $nextlevel = '3';
                    break;
                case "3":
                    $nextlevel = '4';
                    break;
                case "4":
                    $nextlevel = '5';
                    break;
                case "5":
                    $nextlevel = '6';
                    break;
                case "6":
                    $nextlevel = '7';
                    break;
                case "7":
                    $nextlevel = '8';
                    break;
                default:
                    $nextlevel = $level;
            }


            $this->AddPage();
            $this->SetFont('Times','',12);

            
            $this->Cell(0,10,'Student Name: '.$name,0,0,'L');
            $this->Cell(0,10,'Date(d/m/y): '.$date,0,0,'R');
            $this->Ln(5);
            $this->Cell(0,10,'Roll Number: '.$rollno,0,0,'L');
            $this->Cell(0,10,'Branch: '.$branch,0,0,'R');
            $this->Ln(5);
            $this->Cell(0,10,'Level: '.$level,0,1,'R');
            
            // Line break
            $this->Ln(2);
            // Text Content
            $this->Cell(0,5,'Dear parent, ',0,1,'L');

            $this->MultiCell(0,5,'              We hereby extend heartfelt thanks to the support rendered by you so far to promote the art of Bharathanatyam. We are happy to inform you that your child has completed Level - '.$level.' & has been promoted to level - '.$nextlevel.'. At the outset, we put forth the portions covered in the academic year '.($year-1).' - '.$year);

            $this->Ln(2);
            $this->SetFont('Times','B',12);
            $this->Cell(0,10,'ANNUAL APPRAISAL ('.($year-1).' - '.$year.')',0,1,'C');
            
            $entry = array(array("
                                T-1
                        (Jun - Aug 2019)",
                        "                    How to do Guru Namaskaram.
                        Basic exercises (Jumps and Toe Exercises).

                        Introduction to Basic Bharathanatyam Postures.
                        (Sama Paadham, Araimandi & Muzhu Mandi).

                        Theory - Asamyuktha Hasthas (Single Hand Mudras).
                        Adavus: Thattu Adavu (1 to 8) in 3 speeds."),
                        array("
                                T-2
                        (Sept - Nov 2019)",
                        "                    How to do Guru Namaskaram.
                        Basic exercises (Jumps and Toe Exercises).

                        Introduction to Basic Bharathanatyam Postures.
                        (Sama Paadham, Araimandi & Muzhu Mandi).

                        Theory - Asamyuktha Hasthas (Single Hand Mudras).
                        Adavus: Thattu Adavu (1 to 8) in 3 speeds."),
                        array("
                                T-3
                        (Dec'19 - Feb'20)",
                        "                    How to do Guru Namaskaram.
                        Basic exercises (Jumps and Toe Exercises).

                        Introduction to Basic Bharathanatyam Postures.
                        (Sama Paadham, Araimandi & Muzhu Mandi)."),
                        array("
                                T-4
                        (Mar - May 2020)",
                        "                    How to do Guru Namaskaram.
                        Basic exercises (Jumps and Toe Exercises).

                        Introduction to Basic Bharathanatyam Postures.
                        (Sama Paadham, Araimandi & Muzhu Mandi)."));
            // TABLE
            $this->SetWidths(array(70,120));

            // HEADER
            $this->SetFont('Times','B',10);
            $this->Cell(70,8,'TERM',1,0,'C');
            $this->Cell(120,8,'PORTIONS COVERED',1,1,'C');

            // BODY
            $this->SetFont('Arial','',10);
            foreach($entry as $row)
            {   
                $this->Row($row);  
            }
            $this->Ln(10);
            
            // Text Content
            $this->SetFont('Times','',12);
            $this->Cell(0,5,'Please Note, ',0,1,'L');
            $this->Ln(2);
            $this->MultiCell(0,5,'            # The audio and video for the above mentioned portions are given in pendrive / through whatsapp for                     reference and practice.
                # The term fee for the academic year '.$year.' - '.($year+1).' will remain the same (Rs.'.$fee.')');

            $this->Ln(5);
            $this->Cell(0,5,'Regards,',0,1,'L');
            $this->Cell(0,5,'S.KRISHNAN,',0,1,'L');
            $this->Cell(0,5,'Director - PSK',0,1,'L');
        }

        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
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

    $pdf = new PDF_MC_Table();
    $pdf->SetFont('Times','',12);
    //Table with 20 rows and 4 columns
    $pdf->Body();
    $pdf->Output();

?>