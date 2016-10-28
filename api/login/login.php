<?php
include_once('../../includes/header.php');	

/* 
A domain Class to demonstrate RESTful web services
*/
Class login {
	
	private $users=array();
		
	/*
		you should hookup the DAO here
	*/
	/*public function getAlluser(){
		
		
		$sql = "select * from contact_dtl";
		$res=mysql_query($sql);
		while($row=mysql_fetch_assoc($res))
		{
		 array_push($this->users,$row);

		}
		return $this->users;
	}*/
	
	public function getuser($conn,$id,$pass){

	
		$abc=base64_encode($pass);
		
		$sql1 = getuser1($conn,$id,$abc);
		
		//$res1=mysql_query($sql1);
		// echo $res1;
		//$this->users = $res1;
		//$res2 = mysql_fetch_($sql1);
		// while($row1=mysql_fetch_assoc($res1))
		// {
		 // array_push($this->users,$row1);

		// }
		
		if(count($sql1)==1){
			$tkn = gettoken($conn,$id);
			if(count($tkn[0])!=1){
			$t=md5(uniqid(true));
			$ExpireAt =  date("Y-m-d H:i:s", strtotime('+24 hours'));
			
			$upd=UpdateToken($conn,$t,$ExpireAt,$id);			
			
			}
			else{
				$ExpireAt1 =  date("Y-m-d H:i:s", strtotime('+24 hours'));
				
				$upd1=UpdateExpiary($conn,$ExpireAt1,$id);
				
			}
			$tkn1 = gettoken($conn,$id);
			return $tkn1[0]['token'];
		}
		else{
			return "No User Found";
		}
		//$users = array($id => ($this->users[$id]) ? $this->users[$id]:$this->users[$id]);
		 //return $users;
	}	
}
?>