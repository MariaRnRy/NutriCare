<?php
require('tabla.php');

class PDF extends PDF_MySQL_Table
{

protected $col = 0; // Current column
protected $y0;      // Ordinate of column start

function Header()
{
    // Page header
    global $title;
    $this->Image('logo_imss.jpg',10,6,30);
    $this->Image('logo_nutri.jpg',165,8,35);
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(30,10,'INSTITUTO MEXICANO DEL SEGURO SOCIAL','C');
    // Line break
    $this->Ln(35);
    // Save ordinate
    $this->y0 = $this->GetY();
}

function Footer()
{
    // Page footer
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function SetCol($col)
{
    // Set position at a given column
    $this->col = $col;
    $x = 10+$col*50;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    // Method accepting or not automatic page break
    if($this->col<3)
    {
        // Go to next column
        $this->SetCol($this->col+1);
        // Set ordinate to top
        $this->SetY($this->y0);
        $pagina = $this->PageNo();
        if($pagina == '1')
            $this->Ln(55);
        // Keep on page
        return false;
    }
    else
    {
        // Go back to first column
        $this->SetCol(0);
        // Page break
        return true;
    }
}

function ChapterBody($file)
{
    // Read text file
    $txt = file_get_contents($file);
    // Font
    $this->SetFont('Times','',12);
    // Output text in a 6 cm width column
    $this->MultiCell(60,5,$txt);
    $this->Ln();
    // Mention
    $this->SetFont('','I');
    // Go back to first column
    $this->SetCol(0);
}

function ChapterBody2($file)
{
    // Read text file
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Output justified text
    $this->MultiCell(0,5,$txt);
    // Line break
    $this->Ln();
    // Mention in italics
    $this->SetFont('','I');
}

function PrintChapter($file)
{
    // Add chapter
    $this->AddPage();
    $this->ChapterBody2($file);
}

}

//Connect to database
mysql_connect('localhost','root','jkl11');
mysql_select_db('nutricion');
$pdf=new PDF();
$pdf->AddPage();
$pdf->AddCol('Alimento',30,'','C');
$pdf->AddCol('Desayuno',30,'','C');
$pdf->AddCol('ColMat',40,'Col. Matutina','C');
$pdf->AddCol('Comida',20,'','C');
$pdf->AddCol('ColVesp',40,'Col. Vespert','C');
$pdf->AddCol('Cena',20,'','C');
$prop=array('HeaderColor'=>array(255,255,255),
            'color1'=>array(255,255,255),
            'color2'=>array(255,255,255),
            'padding'=>2);
$pdf->Table('select Alimento, Desayuno, ColMat, Comida, ColVesp, Cena from planalim',$prop);
$pdf->Ln(10);
$pdf->ChapterBody('Reporte1.txt');
$pdf->AddPage();
$pdf->ChapterBody('Reporte2.txt');
$pdf->PrintChapter('Reporte3.txt');
$pdf->Output();
?>