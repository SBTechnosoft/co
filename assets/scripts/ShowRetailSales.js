$(function() 
  {
	var str;
	var arr;
	
	$('#datetimepicker2').datetimepicker({
	language: 'pt-BR'
	});
	var t1;
	$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showset' : 1
					
				},
				success : function(r)
				{
					 str = String(r);
					 arr = str.split(",");
					
				}
				
			});
var end_date2=$('#datetimepicker2').data('datetimepicker');
var start_date1 = new Date();

start_date1.setDate(start_date1.getDate()+parseInt(arr[0]));
start_date1.setHours(5+parseInt(arr[1]));
start_date1.setMinutes(30+parseInt(arr[2]));
if(start_date1.getDay()==0)
{
	start_date1.setDate(start_date1.getDate()+parseInt(1));
}
end_date2.setDate(start_date1);
 });