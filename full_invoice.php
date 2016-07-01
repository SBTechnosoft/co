<?php

include_once('includes/header.php');
require('./fpdf/fpdf.php');

if(isset($_POST['fullinvoice']))
	{
		$enm = $_POST['txteventnm'];
		$eds = $_POST['txteventds'];
		$clnm = $_POST['txtclnm'];
		$clcmp = $_POST['txtclcmp'];
		$cemail = $_POST['txtclemail'];
		$wmob = $_POST['txtworkmob'];
		$hmob = $_POST['txthmmob'];
		$mob = $_POST['txtmob'];
		$stat = $_POST['txtstatus'];
		
		$did = $_POST['evfromdt'];
		$date=date_create($_POST['evfromdt']);
		$fd = date_format($date,"dS F , Y H:i A");
		//$fd = $_POST['evfromdt'];
		$date1=date_create($_POST['evtodt']);
		$td = date_format($date1,"dS F , Y H:i A");
		//$td = $_POST['evtodt'];
		$vnue = $_POST['txtvenue'];
		$ldmark = $_POST['txtldmark'];
		$eid = $_POST['eid'];
		
		$inm = date_format($date,"Ymd");		
		
		$fname = $inm."_".$eid.".pdf";

		
		 
			class Mipdf extends FPDF
			{
				function Header()
				{
					// $this->Image("8.png",10,10,10);
					// $this->SetFont("Arial","",12);
					// $this->Cell(0);
					// $this->SetTextColor(255,255,255);
					// $this->SetFillColor(140,140,140);
					// $this->Cell(160,20,"Invoice",1,0,'C');
					// $this->Ln(20);			
					
					$this->SetFont("Arial","",12);
					//$this->Cell(30);
					$this->SetTextColor(255,255,255);
					$this->SetFillColor(140,140,140);
					$this->Cell(190,20,"Event Information",1,0,'C',true);
					$this->Image("images/8.png",10,10,20);
					$this->Ln(20);
				}
				function Footer()
				{
					$this->SetY(-20);
					//$this->Cell(10);
					$this->Cell(190,7,"Page No.".$this->PageNo()."/{nb}",1,0,'C');
				}
			}
			$mipdf = new Mipdf();
			$mipdf->AliasNBPages();
			$mipdf->addPage();
			 //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')			
			$mipdf->Cell(190,8,"",0,1);
			$mipdf->SetFont("Arial","B",12);
			$mipdf->Cell(190,8,"Event Detail",0,1);	
			
			$mipdf->SetFont("Arial","",12);
			$mipdf->Cell(50,8,"Event Name: ",1,0);
			$mipdf->Cell(140,8,$enm,1,1);	
			
			$mipdf->Cell(50,8,"Event Description: ",1,0);
			$mipdf->Cell(140,8,$eds,1,1);
			
			$mipdf->Cell(190,8,"",0,1);
			$mipdf->SetFont("Arial","B",12);
			$mipdf->Cell(190,8,"Client Detail",0,1);	
			
			$mipdf->SetFont("Arial","",12);
			$mipdf->Cell(50,8,"Client Name: ",1,0);
			$mipdf->Cell(140,8,$clnm,1,1);	
			
			$mipdf->Cell(50,8,"Client Company: ",1,0);
			$mipdf->Cell(140,8,$clcmp,1,1);
			
			$mipdf->Cell(50,8,"Email Id: ",1,0);
			$mipdf->Cell(140,8,$cemail,1,1);	
			
			$mipdf->Cell(50,8,"Work: ",1,0);
			$mipdf->Cell(140,8,$wmob,1,1);
			
			$mipdf->Cell(50,8,"Home: ",1,0);
			$mipdf->Cell(140,8,$hmob,1,1);	
			
			$mipdf->Cell(50,8,"Mobile: ",1,0);
			$mipdf->Cell(140,8,$mob,1,1);
			
			$mipdf->Cell(50,8,"Status: ",1,0);
			$mipdf->Cell(140,8,$stat,1,1);
			
			
			$mipdf->Cell(190,8,"",0,1);
			$mipdf->SetFont("Arial","B",12);
			$mipdf->Cell(190,8,"Event Places Detail",0,1);
			
			
			$mipdf->SetFont("Arial","B",10);
			$mipdf->Cell(190,8,"Date Period",1,1);
			
			$mipdf->SetFont("Arial","",10);
			$mipdf->Cell(50,8,"Date: ",1,0);
			$mipdf->Cell(140,8,$fd,1,1);	
			
			$mipdf->Cell(50,8,"To Date: ",1,0);
			$mipdf->Cell(140,8,$td,1,1);
			
			$mipdf->SetFont("Arial","B",10);
			$mipdf->Cell(190,8,"General",1,1);
			
			$mipdf->SetFont("Arial","",10);
			$mipdf->Cell(50,8,"Vennue ",1,0);
			$mipdf->Cell(140,8,$vnue,1,1);	
			
			$mipdf->Cell(50,8,"Land Mark ",1,0);
			$mipdf->Cell(140,8,$ldmark,1,1);
			
			$mipdf->SetFont("Arial","B",10);
			$mipdf->Cell(190,8,"Equipment Detail",1,1);
			
			$mipdf->SetFont("Arial","",10);

			if(isset($enm))
			{
				foreach($_POST['eqp'] as $eqp_name)
				{			  
				  $mipdf->Cell(190,8,$eqp_name,1,1);
				}
			}			
			$mipdf->SetFont("Arial","B",10);
			$mipdf->Cell(190,8,"Staff Detail",1,1);
			
			$mipdf->SetFont("Arial","",10);			
			
			foreach($_POST['stf'] as $stf_name)
			{				
				$mipdf->Cell(190,8,$stf_name,1,1);
			}			
			
			$mipdf->SetFont("Arial","B",10);
			$mipdf->Cell(190,8,"Vendor Detail",1,1);
			
			$mipdf->SetFont("Arial","",10);
			
			foreach($_POST['vend'] as $vend_name)
			{				
				$mipdf->Cell(190,8,$vend_name,1,1);
			}			
				
			
			//$mipdf->Output();
			//$mipdf->Output($fname,'F');
			$mipdf->Output($fname,'F');
			
			updInvFULL($conn,$eid,$fname);
			
			echo $fname;
			//header('Location: upload/invoice/'.$fname);
	}
?>
