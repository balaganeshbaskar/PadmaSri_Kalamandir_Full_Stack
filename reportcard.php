<?php
    
    // header("Content-type:application/pdf");

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
            $this->Image('Report_Card_p1.jpg',0,0,210,297);


            $this->Ln(23);
            $this->SetTextColor(255,255,255);
            $this->SetFont('Times','B',14);
            $this->Cell(150); 
            $this->Cell(0,10,'('.'.$this->year'.')',1,0,'C');
            $this->SetTextColor(0,0,0);
            // Line break
            $this->Ln(16);

            $this->SetFont('Times','B',14);
            $this->Cell(46); 
            $this->Cell(80,10,'$this->name',1,0,'L');
            $this->Cell(20);
            $this->Cell(40,10,'$this->level',1,1,'L');

            $this->Cell(40); 
            $this->Cell(50,10,'$this->doj',1,0,'L');
            $this->Cell(55);
            $this->Cell(35,10,'$this->branch',1,0,'R');
            
            // Line break
            $this->Ln(10);
            $this->SetFont('Times','B',12);


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


            $this->AddPage();
            $this->Image('Report_Card_p2.jpg',0,0,210,297);
            $this->SetFont('Times','',12);

            // Line break
            $this->Ln(20);
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

    $pdf = new PDF_MC_Table();
    $pdf->SetFont('Times','',12);
    //Table with 20 rows and 4 columns
    $pdf->Body();
    $pdf->Output();
?>