<?php
    
    header("Content-type:application/pdf");

     include 'mailer/send-mail.php';
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

        public $name,$branch,$rollno,$level,$date,$intro,$note,$sign;

        function __construct($name,$branch,$rollno,$level,$date,$intro,$note,$sign)
        {
            parent::__construct();

            $this->name = $name;
            $this->branch = $branch;
            $this->rollno = $rollno;
            $this->level = $level;
            $this->date = $date;
            $this->intro = $intro;
            $this->note = $note;
            $this->sign = $sign;
        }

        // Page header
        function Header()
        {
            // // Logo
            // // $this->Image('Logo.png',10,10,20);
            // // Times bold 15
            // $this->SetFont('Times','B',30);
            // // Title
            // $this->Cell(0,10,'PADMASRI KALAMANDIR',0,1,'C');
            // $this->SetFont('Times','B',15);
            // $this->Cell(0,10,'A TEMPLE OF CLASSICAL DANCE',0,1,'C');

            $this->Ln(25);
        }

        function Body()
        {
            $this->AddPage();
            $this->SetFont('Times','',14);

            $this->Image('letterhead.jpg',0,0,210,297);
            
            // Line break
            $this->Ln(20);

            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'WELCOME LETTER',0,1,'C');

            // Line break
            $this->Ln(10);

            // Intro
            $this->SetFont('Times','',14);
            $this->MultiCell(0,5,$this->intro);

            $this->Ln(10);

            $this->Cell(0,12,'Your child has been successfully enrolled in our institution.',0,1,'C');


            // TABLE
            $this->SetLeftMargin(55);
            $this->SetWidths(array(50,50));

            // BODY
            $this->SetFont('Times','',14);
            $this->Row(array('Student Name', $this->name),1);
            $this->Row(array('Roll Number', $this->rollno),1);
            $this->Row(array('Level', $this->level),1);
            $this->Row(array('Branch', $this->branch),1);
            $this->Row(array('Date of Admission', $this->date),1);

            $this->SetLeftMargin(10);
            $this->SetFont('Times','',14);
            $this->Cell(0,5,'',0,1,'C');
            $this->Cell(0,10,'We once again extend a warm welcome to our family.',0,1,'C');

            // Sign
            $this->Ln(30);
            $this->MultiCell(0,5,$this->sign);

            // Line Break
            $this->Ln(10);

            // Note
            $this->SetFont('Times','',12);
            $this->MultiCell(0,5,$this->note);
            // ***************************************************************************************


            // ANNEXURE - I
            $this->AddPage();
            $this->Image('letterhead.jpg',0,0,210,297);

            // Line Break
            $this->Ln(20);
            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - I',0,1,'C');

            // Line Break
            $this->Ln(10);

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'ABOUT PSK',0,1,'C');
            $this->SetFont('Times','',14);
            $this->MultiCell(0,5,'              PadmaSri Kalamandir, Hosur, is a registered cultural institution founded by Guru Shri. S.Krishnan in 2017, with a view to negotiate the glorious culture and tradition of our great country.

          Our institution, with 2 branches across Hosur, is fully committed to teaching Bharathanatyam & other Classical dance forms to the exciting people of Hosur including Elders.

              Our phenomenal growth over the past 12 years is due to the overwhelming response and recognition rendered by the enthusiastic Hosurians, which gives us the much needed inspiration to go all out to attain the summit of cultural education.

            Gurus, Smt. Anjana Krishnan and Shri. S. Krishnan are highly qualified and experienced perdormers, choreographers, teachers and exponents par excellence in their chosen profession.');
            // ***************************************************************************************


            // ANNEXURE - II
            $this->AddPage('L');
            $this->Image('letterhead.jpg',0,0,297,210);

            // Line Break
            $this->Ln(10);
            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - II',0,1,'C');

            // Line Break
            $this->Ln(5);

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'EDUCATIONAL STRUCTURE FOR BHARATHANATYAM',0,1,'C');

            // TABLE
            $this->SetLeftMargin(35);
            $this->SetWidths(array(30,80,60,50));

            // HEADER
            $this->SetFont('Times','B',14);
            $this->Cell(30,8,'AGE',1,0,'C');
            $this->Cell(80,8,'LEVEL',1,0,'C');
            $this->Cell(60,8,'DURATION OF STUDY',1,0,'C');
            $this->Cell(50,8,'CERTIFICATE',1,1,'C');

            $this->SetFont('Times','',14);

            $this->Cell(30,8,'6 / 7 / 8','LRB',0,'C');
            $this->Cell(80,8,'Level 1 - LAYA','LRB',0,'C');
            $this->Cell(60,8,'1 Year','LRB',0,'C');
            $this->Cell(50,8,'BASIC','LRB',1,'C');

            $this->Cell(30,8,'8 - 9','LR',0,'C');
            $this->Cell(80,8,'Level 2 - MUKULA','LRB',0,'C');
            $this->Cell(60,8,'2 Years','LR',0,'C');
            $this->Cell(50,8,'JUNIOR GRADE','LR',1,'C');

            $this->Cell(30,8,'','LRB',0,'C');
            $this->Cell(80,8,'Level 3 - NOOPURA','LRB',0,'C');
            $this->Cell(60,8,'','LRB',0,'C');
            $this->Cell(50,8,'','LRB',1,'C');

            $this->Cell(30,8,'10','LRB',0,'C');
            $this->Cell(80,8,'Level 4 (Prelim) - PAYANA','LRB',0,'C');
            $this->Cell(60,8,'1 Year','LRB',0,'C');
            $this->SetFont('Times','B',14);
            $this->Cell(50,8,'SALANGAI POOJA','LRB',1,'C');
            $this->SetFont('Times','',14);

            $this->Cell(30,8,'','LR',0,'C');
            $this->Cell(80,8,'Level 4 (Advanced) - PAYANA','LR',0,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(50,8,'','LR',1,'C');

            $this->Cell(30,8,'11 - 13','LR',0,'C');
            $this->Cell(80,8,'Level 5 - HRUDAYA','LR',0,'C');
            $this->Cell(60,8,'3 Years','LR',0,'C');
            $this->Cell(50,8,'SENIOR GRADE','LR',1,'C');

            $this->Cell(30,8,'','LRB',0,'C');
            $this->Cell(80,8,'Level 6 (Prelim) - MAYURA','LRB',0,'C');
            $this->Cell(60,8,'','LRB',0,'C');
            $this->Cell(50,8,'','LRB',1,'C');

            $this->Cell(30,8,'14 - 15','LRB',0,'C');
            $this->Cell(80,8,'Level 6 (Advanced) - MAYURA','LRB',0,'C');
            $this->Cell(60,8,'1 Year','LRB',0,'C');
            $this->SetFont('Times','B',14);
            $this->Cell(50,8,'ARANGETRAM','LRB',1,'C');
            $this->SetFont('Times','',14);

            $this->Cell(30,8,'16 - 18','LR',0,'C');
            $this->Cell(80,8,'Level 7 - JWALA','LRB',0,'C');
            $this->Cell(60,8,'2 Years','LR',0,'C');
            $this->Cell(50,8,'DIPLOMA','LR',1,'C');

            $this->Cell(30,8,'','LRB',0,'C');
            $this->Cell(80,8,'Level 8 - MOKSHA','LRB',0,'C');
            $this->Cell(60,8,'','LRB',0,'C');
            $this->Cell(50,8,'','LRB',1,'C');

            $this->SetLeftMargin(15);
            // ***************************************************************************************


            // ANNEXURE - III
            $this->AddPage('L');
            $this->Image('letterhead.jpg',0,0,297,210);

            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - III',0,1,'C');

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'DESCRIPTION OF ALL 8 LEVELS',0,1,'C');

            // TABLE
            // $this->SetLeftMargin(55);
            $this->SetWidths(array(60,90,120));

            // HEADER
            $this->SetFont('Times','B',14);
            $this->Cell(60,8,'LEVEL',1,0,'C');
            $this->Cell(90,8,'PHASE',1,0,'C');
            $this->Cell(120,8,'DESCRIPTION',1,1,'C');


            $this->SetFont('Times','',14);
            $this->Cell(60,8,'LEVEL - I','TLR',0,'C');
            $this->Cell(90,8,'LAYA - BASIC PHASE','TLR',0,'C');
            $this->Cell(120,8,'Exercises, Adavus (Steps), Mandalas (Postures),','TLR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'Sthanakas (position of legs), Mudras (Hand Gestures).','LR',1,'C');

            $this->Cell(60,8,'LEVEL - II','TLR',0,'C');
            $this->Cell(90,8,'MUKULA - BLOSSOMING PHASE','TLR',0,'C');
            $this->Cell(120,8,'Start with Korvais, Jathis, Traditional item (Alaripu)','TLR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'Small Krithis with light movements','LR',1,'C');

            $this->Cell(60,8,'','TLR',0,'C');
            $this->Cell(90,8,'','TLR',0,'C');
            $this->Cell(120,8,'Concentrate on advanced level of performance with','TLR',1,'C');
            $this->Cell(60,8,'LEVEL - III','LR',0,'C');
            $this->Cell(90,8,'NOOPURA - SALANGAI POOJA PHASE','LR',0,'C');
            $this->Cell(120,8,'Expression based items like Kavithvam,','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'Learn Pushpanjali & Jathiswaram,','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'preparation to perform SALANGAI POOJA','LR',1,'C');

            $this->Cell(60,8,'','TLR',0,'C');
            $this->Cell(90,8,'','TLR',0,'C');
            $this->Cell(120,8,'Aim for better perfection, learn complex adavus, study ','TLR',1,'C');
            $this->Cell(60,8,'LEVEL - IV','LR',0,'C');
            $this->Cell(90,8,'PAYANA - IMPROVEMENT PHASE','LR',0,'C');
            $this->Cell(120,8,'aspects of Bhavam, items like Padham, Thillana.','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'Opportunities to perform in TEMPLE PROGRAMMES.','LR',1,'C');


            $this->Cell(60,8,'','TLR',0,'C');
            $this->Cell(90,8,'','TLR',0,'C');
            $this->Cell(120,8,'Learn different varieties of dance items,','TLR',1,'C');
            $this->Cell(60,8,'LEVEL - V','LR',0,'C');
            $this->Cell(90,8,'HRIDAYA - KNOWLEDGE PHASE','LR',0,'C');
            $this->Cell(120,8,'like Varnam, Shabdam, covering theory based chapters,','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'training on in-depth knowledge of Classical Dance;','LR',1,'C');
            $this->Cell(60,8,'','LRB',0,'C');
            $this->Cell(90,8,'','LRB',0,'C');
            $this->Cell(120,8,'create self confidence for SOLO PERFORMANCES.','LRB',1,'C');

            // ***************************************************************************************


            // ANNEXURE - III (cont)
            $this->AddPage('L');
            $this->Image('letterhead.jpg',0,0,297,210);

            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - III (cont)',0,1,'C');

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'DESCRIPTION OF ALL 8 LEVELS (cont)',0,1,'C');

            // TABLE
            $this->SetWidths(array(60,90,120));

            // HEADER
            $this->SetFont('Times','B',14);
            $this->Cell(60,8,'LEVEL',1,0,'C');
            $this->Cell(90,8,'PHASE',1,0,'C');
            $this->Cell(120,8,'DESCRIPTION',1,1,'C');

            $this->SetFont('Times','',14);
            $this->Cell(60,8,'','TLR',0,'C');
            $this->Cell(90,8,'','TLR',0,'C');
            $this->Cell(120,8,'Learn a new Margam of items, basics of music (Shruthi-','TLR',1,'C');
            $this->Cell(60,8,'LEVEL - VI','LR',0,'C');
            $this->Cell(90,8,'MAYURA - ARANGETRAM  PHASE','LR',0,'C');
            $this->Cell(120,8,'Laya-Raga), practise singing of the learnt dance items,','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'express jathis with talam, How to handle Natuvangam - ','LR',1,'C');
            $this->Cell(60,8,'','LRB',0,'C');
            $this->Cell(90,8,'','LRB',0,'C');
            $this->Cell(120,8,'Basic, Preparation to perform ARANGETRAM.','LRB',1,'C');



            $this->Cell(60,8,'','TLR',0,'C');
            $this->Cell(90,8,'','TLR',0,'C');
            $this->Cell(120,8,'Experience many stage performances, participation in ','TLR',1,'C');
            $this->Cell(60,8,'LEVEL - VII','LR',0,'C');
            $this->Cell(90,8,'JWALA - PROFESSIONAL','LR',0,'C');
            $this->Cell(120,8,'sabha programmes, learning techniques of','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'BETTERMENT PHASE','LR',0,'C');
            $this->Cell(120,8,'Choreography, handling Natuvangam for programmes ','LR',1,'C');
            $this->Cell(60,8,'','LR',0,'C');
            $this->Cell(90,8,'','LR',0,'C');
            $this->Cell(120,8,'and opportunity to teach other disciples.','LR',1,'C');


            $this->Cell(60,8,'LEVEL - VIII','TLR',0,'C');
            $this->Cell(90,8,'MOOKSHA - FEEL THE EXPERIENCE','TLR',0,'C');
            $this->Cell(120,8,'Known about stage requirements, costume, make up, ','TLR',1,'C');
            $this->Cell(60,8,'','LRB',0,'C');
            $this->Cell(90,8,'PHASE','LRB',0,'C');
            $this->Cell(120,8,'accompaniments... Experiencing the eternal bliss.','LRB',1,'C');
            // ***************************************************************************************


            // ANNEXURE - IV
            $this->AddPage();
            $this->Image('letterhead.jpg',0,0,210,297);

            // Line Break
            $this->Ln(20);
            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - IV',0,1,'C');

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'TERM & FEE STRUCTURE',0,1,'C');

            // Line Break
            $this->Ln(10);

            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'FEE STRUCTURE: (BHARATHANATYAM)',0,1,'L');

            // TABLE
            $this->SetLeftMargin(25);
            $this->SetWidths(array(80,80));

            // HEADER
            $this->SetFont('Times','B',14);
            $this->Cell(80,8,'LEVELS',1,0,'C');
            $this->Cell(80,8,'TUTION FEE',1,1,'C');

            // BODY
            $this->SetFont('Times','',14);
            $this->Row(array('Levels: 1', 'RS.2000 (Half Yearly)'));
            $this->Row(array('Levels: 2 & 3', 'RS.2500 (Half Yearly)'));
            $this->Row(array('Levels: 4 Prelim', 'RS.2500 (Half Yearly)'));
            $this->Row(array('Levels: 4 Adv, 5 & 6 Prelim', 'RS.3000 (Half Yearly)'));
            $this->Row(array('Levels: 6 Advance', 'RS.3500 (Half Yearly)'));
            $this->Row(array('Levels: 7 & 8', 'RS.4000 (Half Yearly)'));

            $this->SetLeftMargin(10);
            $this->SetFont('Times','',14);
            $this->Cell(0,5,'',0,1,'C');

            
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'ANNUAL TERM STRUCTURE:',0,1,'L');

            // TABLE
            $this->SetLeftMargin(40);
            $this->SetWidths(array(50,80));

            // BODY
            $this->SetFont('Times','',14);
            $this->Row(array('TERM - I', 'JUNE - JULY - AUG - SEPT - OCT'),1);
            $this->Row(array('TERM - II', 'NOV - DEC - JAN - FEB - MAR'),1);

            $this->SetLeftMargin(10);
            $this->SetFont('Times','',14);
            $this->Cell(0,5,'',0,1,'C');
            
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'NOTE:',0,1,'L');
            $data = "5 Months each term and 2 terms annually.
April: Special Schedule & Examinations.
May: Summer Vacation.";

            $this->Bulletins($data,'>',6); // data,bulletin shape, height of line

            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'ADDITIONAL FEE PAYABLE:',0,1,'L');
            $data = "Navarathri Programme Fee (Annually).
Salangai Pooja: Guru Dakshina & Progs Expense (One time).
Out-Station Events / Temple Progs (As and When).
Arangetram: Guru Dakshina & Progs Expense (One time).
Board Examination Fee / Related Expenses (As & When).";

            $this->Bulletins($data,'>',6); // data,bulletin shape, height of line
            
            // ***************************************************************************************


            // ANNEXURE - V
            $this->AddPage();
            $this->Image('letterhead.jpg',0,0,210,297);

            // Line Break
            $this->Ln(10);
            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - V',0,1,'C');

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'PSK NORMS',0,1,'C');

            // Line Break
            $this->Ln(10);

            $data = "The parents are requested to ensure the regular attendance of the disciple.
Perfect silence is expected in and around the classroom premises.
The disciple is expected to ensure punctuality, discipline, wearing uniform and follow safe practices.
The disciple shall wear proper uniform, with single pleated hair to dance class.
The disciple shall bring the dance note book without fail for every class.
Parents are requested to ensure the regular practice at home (of the disciple) through Practice Sheet and keep track on consistant development.
Intimations and circulars given through SMS / WhatsApp / email shall be followed regularly.
Fees payable within 15 days of beginning of each term.
student's absenteeism on their own does not entitle compensation.
Salangai pooja & Arangetram will be performed according to the developed skills, perception, display of talent and performance level of the disciple.
The expenditure for Salangai Pooja & Arangetram shall be shared by the parents of the disciple and the intimation of the same would be given by the management with sufficient time for preparation.
The selection of disciples for programmes lie in the scope of the Gurus which shall be whole heartedly supported by all.
In case a disciple is not selected for programme, the disciple will be given priority in the next programme.
Any extra classes for programme or items on demand by the parents will be charged separately.
Fees / expencses for programme will be informed well in advance and the payment shall be done on a specific date.
The management is not responsible for the completion of mentioned syllabus within the specified time due to the irregular attendance of the disciple.
Request for changes in the time schedule or any other issues shall be communicated over phone (SMS / email / WhatsApp) or in person well in advance to make necessary arrangements.";

            // BODY
            $this->Bulletins($data,'#',6); // data,bulletin shape, height of line
            // ***************************************************************************************


            // ANNEXURE - VI
            $this->AddPage();
            $this->Image('letterhead.jpg',0,0,210,297);

            // Line Break
            $this->Ln(10);
            $this->SetFont('Times','B',18);
            $this->Cell(0,10,'ANNEXURE - VI',0,1,'C');

            // BODY
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'PSK BRANCHES & UNIFORM PATTERN',0,1,'C');

            // Line Break
            $this->Ln(10);
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'PSK BRANCHES @ HOSUR:',0,1,'L');

            // TABLE
            $this->SetLeftMargin(40);
            $this->SetWidths(array(80,50));

            // HEADER
            $this->SetFont('Times','B',14);
            $this->Cell(80,8,'BRANCH',1,0,'C');
            $this->Cell(50,8,'BRANCH CODE',1,1,'C');

            // BODY
            $this->SetFont('Times','',14);
            $this->Row(array('New ASTC Hudco, 100 feet Road', 'AH'));
            $this->Row(array('KCC Nagar, Bagalur Road', 'KN'));

            $this->SetLeftMargin(10);
            $this->SetFont('Times','',14);
            $this->Cell(0,5,'',0,1,'C');

            // Line Break
            $this->Ln(15);
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'DANCE CLASS UNIFORM:',0,1,'L');

            // Line Break
            $this->Ln(5);
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'Dress Specification:',0,1,'L');
            $this->SetFont('Times','',14);
            $this->MultiCell(0,5,'Material           - Poplin
Type                - Chudidhar
Uniform Top   - Yellow
Bottom            - Red
Shawl              - Red');

            // Line Break
            $this->Ln(5);
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,'Uniform Pattern:',0,1,'L');
            $this->SetFont('Times','',14);
            $this->MultiCell(0,5,'Neck            - Square
Sleeve          - Small
Top Length  - Up to knee
Side slit        - Yes
Pant              - Regular Chudidhar pant');

            // Line Break
            $this->Ln(5);
            $this->SetFont('Times','B',14);
            $this->Cell(0,10,"Don't's:",0,1,'L');
            $this->SetFont('Times','',14);
            $this->MultiCell(0,5,'1. No Puff Sleeves
2. No Legging Pants
3. No other designs on the top.');


            // Line Break
            $this->Ln(5);
            $this->SetFont('Times','B',10);
            $this->MultiCell(0,5,'*see the picture for your reference.
*Shop at GEETHA TEXTILES / HARI TEXTILES, M G Road, Hosur.');

            $this->Image('uniform.jpg',110,140,80,110);

        }


        function Bulletins($data, $var, $w)
        {
            $data = explode("\n",$data);

            for($i=0;$i<count($data);$i++)
            {
                $this->SetFont('Times','B',16);
                $this->Cell(8,$w,$var,'',0,'C');
                $this->SetFont('Times','',14);
                $this->MultiCell(0,$w,$data[$i]);
            }
            //Go to the next line
            $this->Ln();
        }

        // Page footer
        function Footer()
        {
            // // Position at 1.5 cm from bottom
            // $this->SetY(-40);
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

    if(isset($_POST["arr"]))  
    {   
        $data = [];
        $arr = [];

        $arr = $_POST["arr"]; // list of alll selected roll numbers

        $sent = "";
        $notsent = "";
        $status = 0; 

        for($i=0;$i<count($arr);$i++)
        {
            $temp = $arr[$i]; // using only first roll number from the list.

            $roll = str_replace(' ', '', $temp); // Removes all spaces

            $d = $mysqli->query("SELECT * FROM student where roll_no='$roll'") or die($mysqli->error);
            $r = $d->fetch_assoc();
            $pi_id = $r['pi_id'];
            $p_id = $r['p_id'];
            $p = $mysqli->query("SELECT * FROM personal where pi_id='$pi_id'") or die($mysqli->error);
            $per = $p->fetch_assoc();


            $p = $mysqli->query("SELECT * FROM portions where level='0'") or die($mysqli->error);
            $row = $p->fetch_assoc();
            $sign = $row['portions'];


            $level = $r['level'];
            $name = $per['name'];
            $branch = $r['centre'];
            $rollno = $roll;
            $year = date("Y");
            $date = $r['doj'];


            $p = $mysqli->query("SELECT * FROM portions where level='-1' and term='0'") or die($mysqli->error);
            $row = $p->fetch_assoc();
            $intro = $row['portions'];


            $p = $mysqli->query("SELECT * FROM portions where level='-1' and term='1'") or die($mysqli->error);
            $row = $p->fetch_assoc();
            $note = $row['portions'];


            $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$date,$intro,$note,$sign);
            $pdf->SetFont('Times','',12);
            $pdf->Body();

            // Year / Branch / Level / Name
            $dir = "Documents/".$year."/".$branch."/".$level."/".$name;
            if (!file_exists($dir))
            {
                mkdir($dir, 0777, true);
            }
            $filename = $dir."/Welcome_Letter_L-".$level.".pdf";
            $pdf->Output('F', $filename, true); // save into the folder of the script

            // Sending mail to the student and parents
            $parentcollection = $mysqli->query("SELECT * FROM parents where p_id='$p_id'") or die($mysqli->error);
            $parents = $parentcollection->fetch_assoc();
            $fmail = $parents['fmail'];
            $fname = $parents['fname'];

            $mailtype = "welcomeletter";

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

    else if(isset($_POST["wl"]))  
    {   
        $data = [];
        $arr = [];
        $level = $_POST["wl"];

        $pdf = $mysqli->query("SELECT * FROM portions where level='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $sign = $row['portions'];

        $name = 'Student';
        $branch = 'XX';
        $rollno = '0000XX000X';
        $year = date("Y");
        $date = date("d/m/Y");

        $pdf = $mysqli->query("SELECT * FROM portions where level='-1' and term='0'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $intro = $row['portions'];
        

        $pdf = $mysqli->query("SELECT * FROM portions where level='-1' and term='1'") or die($mysqli->error);
        $row = $pdf->fetch_assoc();
        $note = $row['portions'];

        $data += array('intro' => $intro);
        $data += array('note' => $note);
        $data += array('sign' => $sign);


        $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$date,$intro,$note,$sign);
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
        $date = date("d/m/Y");
        $level = '1';

        $intro = $_POST["wl_intro"];
        $note = $_POST["wl_note"];
        $sign = $_POST["wl_sign"];

        $mysqli->query("UPDATE portions SET portions='$sign' where level='0' and term='1'") or die($mysqli->error());

        $mysqli->query("UPDATE portions SET portions='$intro' where level='-1' and term='0'") or die($mysqli->error());
        $mysqli->query("UPDATE portions SET portions='$note' where level='-1' and term='1'") or die($mysqli->error());


        $data += array('intro' => $intro);
        $data += array('note' => $note);
        $data += array('sign' => $sign);
 
        $pdf = new PDF_MC_Table($name,$branch,$rollno,$level,$date,$intro,$note,$sign);
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