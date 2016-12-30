<?php
require('fpdf/fpdf.php');
function ImprovedTable($header, $data)
{
    // Column widths
    $w = array(40, 35, 40, 45);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Times','BIU',15);
        $this->Image('Slike/user-group-icon.png',10,8,33);
        $this->Cell(80);
        $this->Cell(32,10,'PDF Report - our loyal customers',0,0,'C');
        $this->Ln(20);
        $this->Cell(0,10,'Users: ',0,0,'C');
        $this->Ln(20);
    }


    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$files=glob('users/*.xml');
$i = 1;


foreach($files as $file){

	$xml = new SimpleXMLElement($file,0,true);
	$pdf->Cell(0, 10,''.$i.': '.$xml->user->firstName.' '.$xml->user->lastName, 0, 1);
    $pdf->Cell(0, 10,'Username: '.$xml->user->username, 0, 1);
    $pdf->Cell(0, 10,'Password: '.$xml->user->password, 0, 1);

	$i = $i + 1;

}

$pdf->Output();
?>