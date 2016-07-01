
$(document).ready(function(){
	$('#sublogin').click(function(){
		
		
		var userid = $('#username').val();
		var pass = $('#password').val();
		
				
			var flag=0;
			if(userid == "")
			{
				alert("Enter Your Name.");				
				return false;
			}		
			else
			{
				if(userid.length<3)
				{
					userid.value="";
					alert("Enter atleast 3 characters as Your Name.");					
					return false;
				}
				
			}
			
			
			if(pass == "")
			{
				alert("Enter Desired Password .");				
				return false;
			}
			if(pass.length<3)
			{
				pass = "";
				alert("Enter atleast 3 characters as Your Password.");				
				return false;
			}		
		
		if(userid == '' || pass == '' )
		{
			alert("plz insert the username and password");
			return false;
		}
		
		
		
		$.ajax({
			
			url : 'loginPost.php',
			type : 'post',
			async : false,
			data : {
				'auth' : 1,
				'userid' : userid,
				'pass'	 : pass
				
			},
			cache: false,
			success:function(r)
			{				
			
				if(r == 1)
				{
					alert(r);
					location.href= "index.php";
				}
				
			}
			
			
		});
			
		
		
		
	});
	

});