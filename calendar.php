<?php
include('header.php');

?>
 
<!-- Page Content -->
<div class="container">
<div class="row">
			
                <h2 class="page-header"><span class="th">ปฏิทินกิจกรรม</span><span class="en">Calendar</span></h2>
				<hr class='border' />
				
				
			<div class="col-lg-7">
				<div id='calendar'></div>
			</div>
			<div class="col-md-5">
				<form name="frmSearch" id="frmSearch"   method="get" action="<?php $_SERVER['SCRIPT_NAME'] ?> ">
					<input type="text" id="startDate" name="startDate" value="" placeholder="วันที่เริ่มต้น" />
					<input type="text" id="endDate" name="endDate" value="" placeholder="วันที่สิ้นสุด" />
					<input type="submit" value="ค้นหา"  />
					<?  $startDate = $_REQUEST["startDate"];
						$endDate = $_REQUEST["endDate"];
					?>
				</form>
				<div class="boxlistCar">
					
					<?
						$datemm = date("Y-m");
						//echo $datemm;
					
						$sql = " select event_id,title,title_en, DATE_FORMAT(`start`,'%d/%m/%Y') as `start` from t_event";
								 if($startDate == ""){
									 
								 }else {
									 $sql .= " where `start` BETWEEN '".$startDate." 00:00:00' and '".$endDate." 23:59:59'";
								 }
								 
							
							//echo $sql;
								$objQuery = mysql_query($sql);
								echo "<table style='width: 100%;'>";
								
									while ($row = mysql_fetch_array($objQuery)) {
										echo "
											<tr>
												<td>".$row['start']."</td>
												<td>
													<a href='event_detail.php?id=".$row['event_id']."'>
														<span class='th'>".$row['title']."</span>
												   		<span class='en'>".$row['title_en']."</span>
												   </a>
												</td>
												
												
											</tr>";
										
									}
							echo "</table>";
					?>
					</div>
			</div>
		</div>
</div>


<?php
include('footer.php');

?>
<script type="text/javascript" src="js/fullcalendar-2.1.1/lib/moment.min.js"></script>  
<script type="text/javascript" src="js/fullcalendar-2.1.1/fullcalendar.min.js"></script>  
<script type="text/javascript" src="js/fullcalendar-2.1.1/lang/th.js"></script>  
<script type="text/javascript" src="script.js"></script>
<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />

		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
		<script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
		
		
		<script>
		$(function(){  
  
    $('#calendar').fullCalendar({  
        header: {  
            left: 'prev,next today',    
            center: 'title',  
            right: 'month,agendaWeek,agendaDay',  
        },    
        events: {  
            url: 'data_events.php?gData=1',  
            error: function() {  
  
            }  
        },      
        eventLimit:true,  
        lang: 'th'  
    });  
       
}); 
	$(function(){

	$("#startDate").datepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate").datepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});

});
		</script>
