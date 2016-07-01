<?php
 require('/fpdf/fpdf.php');
 //require(FILENAME_FPDF);
	class Mipdf extends FPDF
	{
		function Header()
		{
			//$this->Image("8.png",10,10,20);
			$this->SetFont("Arial","",12);
			$this->Cell(30);
			$this->SetTextColor(255,255,255);
			$this->SetFillColor(255,0,0);
			$this->Cell(100,20,"Divyesh Window 7",1,0,'C',true);
			$this->Ln(20);
		}
		function Footer()
		{
			$this->SetY(-20);
			$this->Cell(20);
			$this->Cell(120,10,"Page No.".$this->PageNo()."/{nb}",1,0);
		}
	}
	$mipdf = new Mipdf();
	$mipdf->AliasNBPages();
	$mipdf->addPage();
	
	for($i=0;$i<50;$i++)
	{
		$mipdf->Cell(100,20,"Data No.".$i,0,1);
	}
	
	$mipdf->Output();
	
?>