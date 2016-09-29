$(function() 
  {
	$('#datetimepicker2').datetimepicker({
	language: 'pt-BR'
	});
	var t1;
	$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					t1=r.retail_sales_day;
				//	alert(t1);
					
				}
				
			});
var end_date2=$('#datetimepicker2').data('datetimepicker');
var start_date1 = new Date();

start_date1.setDate(start_date1.getDate()+parseInt(t1));
if(start_date1.getDay()==0)
{
	start_date1.setDate(start_date1.getDate()+parseInt(1));
}
end_date2.setDate(start_date1);
 });
