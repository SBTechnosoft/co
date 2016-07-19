<?php
	include_once('includes/header.php');
	//require('/home/siliconbrain/public_html/beta.prabandhak.co.in/fpdf/fpdf.php');
	require(DIR_WS_FPDF.'fpdf.php');
	
	$date=date_create($_POST['txtfdate']);
	$inm = date_format($date,"Ymd");
	$id = $_POST['txteid'];
	
	if($_POST['txtcmpnm']== '')
	{
		$cmp = "NA";
	}
	else
	{
		$cmp = $_POST['txtcmpnm'];
	}
	$enm = $_POST['txtenm'];	
	$fdate= date_format($date,"dS F , Y H:i A");
	$sdate= date_format($date,"dS F , Y");
	$cnm = $_POST['txtcnm'];
	$charge = $_POST['txtcharge1'];
	$cpaid = $_POST['txtpaid'];
	$ramt = $charge - $cpaid;
	
	if(isset($_POST['txteid']))
	{	

		$data = showInvName($conn,$_POST['txteid']);
		$cnt = count($data);
		
		for($i=0;$i<$cnt;$i++)
		{
			
			if($data[$i]['inv_file_name']=='')
			{
				$fname = $inm."-".$_POST['txteid']."_1.pdf";		
				
				class Mipdf extends FPDF
				{
					function Header()
					{
						$this->SetFont("Arial","",14);						
						$this->SetTextColor(255,255,255);
						$this->SetFillColor(140,140,140);
						$this->Cell(190,20,"Invoice",1,0,'C',true);
						$this->Image("images/8.png",10,10,20);
						$this->Ln(20);
					}
					function Footer()
					{
						$this->SetY(-20);
						
						$this->Cell(190,7,"Page No.".$this->PageNo()."/{nb}",1,0,'C');
					}
				}
				$mipdf = new Mipdf();
				$mipdf->AliasNBPages();
				$mipdf->addPage();
				
				$mipdf->SetFont("Arial","",12);
				$mipdf->Cell(130,10,"To: ".$cmp,1,0);
				$mipdf->Cell(60,10,$sdate,1,1,'C');
				
				$mipdf->Cell(190,10,"Event: ".$enm,1,1);
				
				//$mipdf->Cell(60,10,"FP No.: ".$data[$i]['fp_no'],1,1);
				
				$mipdf->Cell(190,10,"Event Date: ".$fdate,1,1);
				
				$mipdf->Cell(130,10,"Vennue: ",1,0);
				$mipdf->Cell(60,10,"Invoice No.: ".$id,1,1);
				
				$mipdf->Cell(190,10,"Client: ".$cnm,1,1);
				
				$mipdf->Cell(20,10,"SR No.",1,0,'C');
				$mipdf->Cell(90,10,"Event Detail",1,0,'C');
				$mipdf->Cell(20,10,"Qty.",1,0,'R');
				$mipdf->Cell(30,10,"Rate.",1,0,'R');
				$mipdf->Cell(30,10,"Amount",1,1,'R');
				
				$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
				$cnt = count($dEqp);		
				for($a=0;$a<$cnt;$a++)
				{
					if($dEqp[$a]['length']!='')
					{
					$mipdf->Cell(20,10,$a+1,1,0,'R');
					$mipdf->Cell(90,10," ".$dEqp[$a]['eq_name']."  (".$dEqp[$a]['length']."*".$dEqp[$a]['width'].")",1,0);
					$mipdf->Cell(20,10," ".$dEqp[$a]['qty'],1,0);
					$mipdf->Cell(30,10," ".$dEqp[$a]['rate'],1,0);
					$mipdf->Cell(30,10,$dEqp[$a]['amount'],1,1,'R');
					}
					else
					{
					$mipdf->Cell(20,10,$a+1,1,0,'R');
					$mipdf->Cell(90,10," ".$dEqp[$a]['eq_name'],1,0);
					$mipdf->Cell(20,10," ".$dEqp[$a]['qty'],1,0);
					$mipdf->Cell(30,10," ".$dEqp[$a]['rate'],1,0);
					$mipdf->Cell(30,10,$dEqp[$a]['amount'],1,1,'R');
					}
				}
				
					$mipdf->Cell(20,10,"",1,0);
					$mipdf->Cell(90,10,"",1,0);
					$mipdf->Cell(20,10,"",1,0);
					$mipdf->Cell(30,10,"",1,0);
					$mipdf->Cell(30,10,"",1,1);			
				
				$mipdf->Cell(160,10,"Charge ",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['client_charges'],1,1,'R');
				
				$mipdf->Cell(160,10,"Discount ",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['client_discount_amt'],1,1,'R');
				
				$mipdf->Cell(160,10,"S.Tax ".$data[$i]['service_tax_rate']."%",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['service_tax_amt'],1,1,'R');
				
				$mipdf->Cell(160,10,"TOTAL ",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['total_amt'],1,1,'R');
				
				//$mipdf->Cell(160,10,"PAID AMOUNT ",1,0,'R');
				//$mipdf->Cell(30,10,$data[$i]['client_paid_amt'],1,1,'R');	
				
				//$mipdf->Cell(160,10,"REAMINING AMT ",1,0,'R');
				//$mipdf->Cell(30,10,$ramt,1,1,'R');
				
				$mipdf->Cell(190,8,"",0,1);
				
				$cond = showInvCond($conn);				
				$cnt = count($cond);	
				for($b=0;$b<$cnt;$b++)
				{
					$allcond = json_decode($cond[$b]['inv_cond_json']);
					$cntjsn = count($allcond);
					for($k=0;$k<$cntjsn;$k++)
					{
						$mipdf->Cell(190,8,$allcond[$k],0,1);
					}
				}
				if($data[$i]['cmp_name']!='')
				{
					$company=ucfirst($data[$i]['cmp_name']);
				}
				else
				{
					$company="-";
				}
				
				$mipdf->Cell(130,8,"",0,0);
				$mipdf->Cell(60,8,$company,0,1,'C');	
				$mipdf->Cell(190,8,"   Email: abc@gmail.com",0,1,'R');
				
				
				$path = DIR_WS_INV.$fname;
				$mipdf->Output($path,'F');				
				
				$date1 = date('Y-m-d H:i:s');
				updInvEM($conn,$id,$fname);
				insInvECID($conn,$id,$fname,$date1,$_SESSION['USER_ID']);
				
				header('Location: upload/invoice/'.$fname);		
			}
			else
			{
				
				$pos = substr($data[$i]['inv_file_name'],(strpos($data[$i]['inv_file_name'],"_") + 1),1);
				$pos = $pos+ 1;
				$newFileName = substr($data[$i]['inv_file_name'],0,strpos($data[$i]['inv_file_name'],"_") + 1) . (int)$pos . ".pdf" ;
				
				class Mipdf extends FPDF
				{
					function Header()
					{
						$this->SetFont("Arial","",14);
						
						$this->SetTextColor(255,255,255);
						$this->SetFillColor(140,140,140);
						$this->Cell(190,20,"Invoice",1,0,'C',true);
						$this->Image("images/8.png",10,10,20);
						$this->Ln(20);
					}
					function Footer()
					{
						$this->SetY(-20);
						
						$this->Cell(190,7,"Page No.".$this->PageNo()."/{nb}",1,0,'C');
					}
				}
				$mipdf = new Mipdf();
				$mipdf->AliasNBPages();
				$mipdf->addPage();
				
				$mipdf->SetFont("Arial","",12);
				$mipdf->Cell(130,10,"To: ".$cmp,1,0);
				$mipdf->Cell(60,10,$sdate,1,1,'C');
				
				$mipdf->Cell(190,10,"Event: ".$enm,1,1);
				//$mipdf->Cell(60,10,"FP No.: ".$data[$i]['fp_no'],1,1);
				
				$mipdf->Cell(190,10,"Event Date: ".$fdate,1,1);
				
				$mipdf->Cell(130,10,"Vennue: ",1,0);
				$mipdf->Cell(60,10,"Invoice No.: ".$id,1,1);
				
				$mipdf->Cell(190,10,"Client: ".$cnm,1,1);
				
				$mipdf->Cell(20,10,"SR No.",1,0,'C');
				$mipdf->Cell(90,10,"Event Detail",1,0);
				$mipdf->Cell(20,10,"Qty.",1,0,'R');
				$mipdf->Cell(30,10,"Rate.",1,0,'R');
				$mipdf->Cell(30,10,"Amount",1,1,'R');
				
				//fetch the data from new event_places_dtail with the amount of the equipment
				
				$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
				$cnt = count($dEqp);		
				for($a=0;$a<$cnt;$a++)
				{
					if($dEqp[$a]['length']!='')
					{
					$mipdf->Cell(20,10,$a+1,1,0,'R');
					$mipdf->Cell(90,10," ".$dEqp[$a]['eq_name']."  (".$dEqp[$a]['length']."*".$dEqp[$a]['width'].")",1,0);
					$mipdf->Cell(20,10," ".$dEqp[$a]['qty'],1,0,'R');
					$mipdf->Cell(30,10," ".$dEqp[$a]['rate'],1,0,'R');
					$mipdf->Cell(30,10,$dEqp[$a]['amount'],1,1,'R');
					}
					else
					{
					$mipdf->Cell(20,10,$a+1,1,0,'R');
					$mipdf->Cell(90,10," ".$dEqp[$a]['eq_name'],1,0);
					$mipdf->Cell(20,10," ".$dEqp[$a]['qty'],1,0,'R');
					$mipdf->Cell(30,10," ".$dEqp[$a]['rate'],1,0,'R');
					$mipdf->Cell(30,10,$dEqp[$a]['amount'],1,1,'R');
					}
				}
				
				//end of fetching
					$mipdf->Cell(20,10,"",1,0);
					$mipdf->Cell(90,10,"",1,0);
					$mipdf->Cell(20,10,"",1,0);
					$mipdf->Cell(30,10,"",1,0);
					$mipdf->Cell(30,10,"",1,1);
					
					
				
				
				$mipdf->Cell(160,10,"Charge ",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['client_charges'],1,1,'R');
				
				$mipdf->Cell(160,10,"Discount ",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['client_discount_amt'],1,1,'R');
				
				$mipdf->Cell(160,10,"S.Tax ".$data[$i]['service_tax_rate']."%",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['service_tax_amt'],1,1,'R');
				
				$mipdf->Cell(160,10,"TOTAL ",1,0,'R');
				$mipdf->Cell(30,10,$data[$i]['total_amt'],1,1,'R');
				
				//$mipdf->Cell(160,10,"PAID AMOUNT ",1,0,'R');
				//$mipdf->Cell(30,10,$data[$i]['client_paid_amt'],1,1,'R');	
				
				//$mipdf->Cell(160,10,"REAMINING AMT ",1,0,'R');
				//$mipdf->Cell(30,10,$ramt,1,1,'R');
				
				$mipdf->Cell(190,8,"",0,1);				
				
				$cond = showInvCond($conn);
				$cnt = count($cond);	
				for($b=0;$b<$cnt;$b++)
				{
					$allcond = json_decode($cond[$b]['inv_cond_json']);
					$cntjsn = count($allcond);
					for($k=0;$k<$cntjsn;$k++)
					{
						$mipdf->Cell(190,8,$allcond[$k],0,1);
					}
				}
				if($data[$i]['cmp_name']!='')
				{
					$company=ucfirst($data[$i]['cmp_name']);
				}
				else
				{
					$company="-";
				}
				
				$mipdf->Cell(130,8,"",0,0);
				$mipdf->Cell(60,8,$company,0,1,'C');	
				$mipdf->Cell(190,8,"Email: abc@gmail.com",0,1,'R');
				
				$path = DIR_WS_INV.$newFileName;
				
				$mipdf->Output($path,'F');
				
				$date = date('Y-m-d H:i:s');
				
				updInvEM($conn,$id,$newFileName);
				insInvECID($conn,$id,$newFileName,$date,$_SESSION['USER_ID']);
				header('Location: upload/invoice/'.$newFileName);			
				
			}
		}
	}

exit;
	
	
	
?>
