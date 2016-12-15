<?php
include('header.php');

?>



	<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span>ปฏิทินกิจกรรม</span></h3>
				<hr>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>

                </ol>
			</div>
        </div>
		<div class="row">
		<div class="col-md-7">
			<form id="form1" name="form1" method="post" action="">
				<input type="hidden" id="event_id" name="event_id" />
				<div id='wrap'>
					<div id='calendar'></div>
					<div style='clear:both'></div>
				</div>
			</form>
		</div>
		<div class="col-md-5">
			<div class="boxlistCar">
			<div class='adminDiv text-right'>	
				<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่ม</button>
			</div>
			<br />
			<form name="frmSearch" id="frmSearch"   method="get" action="<?php $_SERVER['SCRIPT_NAME'] ?> ">
					<input type="text" id="startDate" name="startDate" value="" placeholder="วันที่เริ่มต้น" />
					<input type="text" id="endDate" name="endDate" value="" placeholder="วันที่สิ้นสุด" />
					<input type="submit" value="ค้นหา"  />
					<?  $startDate = $_REQUEST["startDate"];
						$endDate = $_REQUEST["endDate"];
					?>
					</form>
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
												<td><span class='th'>".$row['title']."</span>
												   <span class='en'>".$row['title_en']."</span>
												</td>
												

													<td>
													<div  class='adminDiv text-right'>
													<a href='form_event.php?event_id=".$row['event_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
														
																				
													echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelCar(".$row['event_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													</div>						
														";
										echo "		</td>
												
												
											</tr>";
										
									}
							echo "</table>";
					?>
			</div>
		</div>
	</div>
	</div>
	

<input type="hidden" name="ID" id="ID" value="0"> 
<?php
include('footer.php');

?>
<script type="text/javascript" src="../js/fullcalendar-2.1.1/lib/moment.min.js"></script>  
<script type="text/javascript" src="../js/fullcalendar-2.1.1/fullcalendar.min.js"></script>  
<script type="text/javascript" src="../js/fullcalendar-2.1.1/lang/th.js"></script>  
<script type="text/javascript" src="../script.js"></script>
<link href='../css/fullcalendar.css' rel='stylesheet' />
<link href='../css/fullcalendar.print.css' rel='stylesheet' media='print' />

		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
		<script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
		

<script type="text/javascript">
$(function(){  
  
    $('#calendar').fullCalendar({  
        header: {  
            left: 'prev,next today',    
            center: 'title',  
            right: 'month,agendaWeek,agendaDay',  
        },    
        events: {  
            url: '../data_events.php',  
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

function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_event.php?"+"event_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdDel(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
</script>


<script language="javascript">

function cmdsave(){
	var modal = document.getElementById('eventAdd');
	var params = "n=" + Math.random();
	params = params + "&" + $('#form1').serialize();
	//alert($('#frmQ').serialize());
	
	$.ajax({
		type: "POST",
		url: "function/add_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				//location.reload();
				alert('บันทึกเรียบร้อยแล้ว');
				modal.style.display = "none";
				location.reload();	
					
			} else {

				alert(sxAjax);
			}	
		}
	});	
	
	//document.getElementById('button').disabled = true;
}

function cmdedit(){
	var modal = document.getElementById('eventEdit');
	var params = "n=" + Math.random();
	params = params + "&" + $('#form1').serialize();
	//alert($('#frmQ').serialize());
	
	$.ajax({
		type: "POST",
		url: "function/edit_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				//location.reload();
				alert('แก้ไขเรียบร้อยแล้ว');
				modal.style.display = "none";		
				location.reload();	
					
			} else {

				alert(sxAjax);
			}	
		}
	});	
	
	//document.getElementById('button').disabled = true;
}

function cmddelete(){
	var modal = document.getElementById('eventEdit');
	var params = "n=" + Math.random();
	params = params + "&" + $('#form1').serialize();
	//alert($('#frmQ').serialize());
	
	$.ajax({
		type: "POST",
		url: "function/delete_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				//location.reload();
				alert('ลบเรียบร้อยแล้ว');
				modal.style.display = "none";		
				location.reload();	
					
			} else {

				alert(sxAjax);
			}	
		}
	});	
	
	//document.getElementById('button').disabled = true;
}


</script>



