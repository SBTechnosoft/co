<?php
/**
* @Author Virat Gaywala
* Created on 19-JAN-2016
* Purpose: Main Routing file of iValuation 
* Last Modified By: Virat Gaywala
* Last Modified Date: 19-JAN-2016
*/
    $url='';
    if(isset($_SESSION['USER_ID']) && ($_SESSION['USER_ID']!=''))
    {    
        if (isset($_GET['url']))
        {             
            switch(strtoupper($_GET['url']))
            {
				case 'DSH':
                    $url = FILENAME_DASHBOARD;
                    break;					
				case 'EPC':
                    $url = FILENAME_PAID_EXCEL;
                    break;
				case 'ENR':
					$url = FILENAME_ENQUIRY;
					break;
				case 'VER':
					$url = FILENAME_VERTICALTIMELINE;
					break;
				case 'ENQ':
					$url = FILENAME_ENQUIRYFORM;
					break;
				case 'NEW';
					$url = FILENAME_NEW;
					break;
				case 'UPC';
					$url = FILENAME_UPCOMING;
					break;
				case 'COM';
					$url = FILENAME_COMPLETED;
					break;
				case 'PID':
					$url = FILENAME_PAID;
					break;
				case 'UPD':
					$url = FILENAME_UNPAID;
					break;
				case 'CTG':
					$url = FILENAME_CATEGORY;
					break;
				case 'EQA':
					$url = FILENAME_EQUIPALL;
					break;
				case 'ACS':
					$url = FILENAME_ACCESSORIES;
					break;
				case 'STF':
					$url = FILENAME_STAFFADD;
					break;
				case 'STA':
					$url = FILENAME_STAFFALL;
					break;
				case 'ALL':
					$url = FILENAME_ALL;
					break;
				case 'CAL':
					$url = FILENAME_CALENDAR;
					break;	
				case 'EVE':
					$url = FILENAME_ADDEVENTS;
					break;	
				case 'PRO':
					$url = FILENAME_MYPROFILE;
					break;	
				case 'VAL':
					$url = FILENAME_VENDORALL;
					break;
				case 'VDE':
					$url = FILENAME_VENDORDETAIL;
					break;
				case 'VPD':
					$url = FILENAME_VENDORPAID;
					break;
				case 'VUD':
					$url = FILENAME_VENDORUNPAID;
					break;
				case 'CMP':
					$url = FILENAME_COMPANYINFO;
					break;
				case 'HOL':
					$url = FILENAME_HOLIDAY;
					break;
				case 'EVD':
					$url = FILENAME_EVENTDETAIL;
					break;
				case 'ADC':
					$url = FILENAME_ADDCOMPANY;
					break;
				case 'LOG':
					$url = FILENAME_LOGOUT;
					break;
						
				default:
					$url = FILENAME_DASHBOARD;
					break;
            }        
       }
       else
	   {
		   $url = FILENAME_DASHBOARD;
	   }		   
       //$url=FILENAME_LOGIN;
		include_once($url); 
    }
    else if(isset($_GET['url']) && $_GET['url']=='fp')
    {
       $url = FILENAME_FORGOT_PASSWORD; 
    }
    else
    {        
        header("Location: ".HTTP_SERVER.FILENAME_LOGIN);       
    }  
     
?>
