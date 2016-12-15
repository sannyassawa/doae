<?php
include('header.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href='css/fullcalendar.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
        <script src='js/fullcalendar-2.1.1/lib/moment.min.js'></script>
        <script type="text/javascript" src='js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
        <script src='js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js'></script>
        <script src='js/fullcalendar-2.1.1/fullcalendar.js'></script>
        <script src='js/fullcalendar-2.1.1/lang/en-au.js'></script>

        <script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
        <script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
        <script>
            $(document).ready(function () {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var h = {};

                $('#eventEdit').hide();
                $('#calendar').fullCalendar({
                  draggable: true,
                  editable: true,
                  selectable: true,
                  selectHelper: true,
                  header: {
                          left: 'prev,next today',
                          center: 'title',
                          right: 'month,agendaWeek,agendaDay'
                  },
                  /*views: {
                  		listMonth :{
                  			buttonText: 'list Month'
                  		}
                  },*/
                  columnFormat: {
                          month: 'dddd'
                  },
                    events: "./data_events.php",
                  
                    // Convert the allDay from string to boolean
                    eventRender: function (event, element) {
                    	  element.find(".fc-title").remove();
                          element.find(".fc-time").remove();
                          var new_description = ''
                                  + moment(event.start).format("HH:mm") + '-' + moment(event.end).format("HH:mm") + '<br/>'
                                  + '<strong>title : </strong>' + event.title + '<br/>'
                                  ;

                          element.append(new_description);
                      
                          
                  },
                  select: function (start, end, allDay) {
                        
                  		var modal = document.getElementById('eventAdd');
                  		var span = document.getElementsByClassName("close")[0];
                  		modal.style.display = "block";
                  		
                  		span.onclick = function() {
    					modal.style.display = "none";
						}

						window.onclick = function(event) {
   						if (event.target == modal) {
        				modal.style.display = "none";
    					}
						}
                  },
                  eventDrop: function (event, delta, revertFunc) {
                  		var dropedDate = event.start.format("YYYY-MM-DD");
                  		var today = $('#calendar').fullCalendar('getDate');
                        var today_newformat = today.format("YYYY-MM-DD");

                        var timestart = event.start.format("H:mm:ss");
                        var timeend = event.end.format("H:mm:ss");
                        //alert(timeend);
                        //print('date: '+dropedDate +'time:'+timestart+'<>'+timeend);
                          if (event.forceAllDay && !allDay) {
                                  revertFunc();
                          } else {
                                  
                                  			var params = "n=" + Math.random();
											params = params + "&" + $('#calendar').serialize();
                                          $.ajax({
                                                  type: "POST",
                                                  url: 'function/drang_drop.php',
                                                  cache: false,
                                                  async: false,
                                                  data: ({
                                                          id: event.event_id,
                                                          start: dropedDate+' '+timestart,
                                                          end: dropedDate+' '+timeend
                                                          
                                                  }),
                                                  beforeSend: function () {

                                                  },
                                                  success: function (sxAjax) {
                                                        if (sxAjax.substr(0,9) == "Completed") {
														alert('แก้ไขเรียบร้อยแล้ว')
														location.reload();
														} else {
														alert(sxAjax);
													}	
                                                  },
                                                  error: function () {
                                                        revertFunc();
                                                  }
                                          })
                                  
                          }
                  },
                  eventClick: function (event, jsEvent, view) {
                  		$('#event_id').val(event.event_id);
                  		$('#title').val(event.title);
                  		$('#startDate').val(event.start.format('YYYY-MM-DD H:mm:ss'));
                  		$('#endDate').val(event.end.format('YYYY-MM-DD H:mm:ss'));

                  		var modal = document.getElementById('eventEdit');
                  		var span = document.getElementsByClassName("close")[0];
                  		modal.style.display = "block";
                  		
                  		span.onclick = function() {
    					modal.style.display = "none";
						}

						window.onclick = function(event) {
   						if (event.target == modal) {
        				modal.style.display = "none";
    					}
						}
                  },
                  loading: function (bool) {
                          if (bool)
                                  $('#loading').show();
                          else
                                  $('#loading').hide();
                  }
          });
        })
</script>

<script language="javascript">
	$(function(){
	$("#month").datetimepicker({
		dateFormat: 'yy-mm',
		numberOfMonths: 1,
	});
	$("#startDate").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#startDate_add").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate_add").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
		
});

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

        <style>

            body {
                margin-top: 40px;
                text-align: center;
                font-size: 14px;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            }

			/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 100; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

            #wrap {
                width: 150px;
                margin: 0 auto;
            }

            #external-events {
                float: left;
                width: 150px;
                padding: 0 10px;
                border: 1px solid #ccc;
                background: #eee;
                text-align: left;
            }

            #external-events h4 {
                font-size: 16px;
                margin-top: 0;
                padding-top: 1em;
            }

            #external-events .fc-event {
                margin: 10px 0;
                cursor: pointer;
            }

            #external-events p {
                margin: 1.5em 0;
                font-size: 11px;
                color: #666;
            }

            #external-events p input {
                margin: 0;
                vertical-align: middle;
            }

            #calendar {
                float: right;
                width: 700px;
            }

        </style>
    </head>
    <body>
    <form id="form1" name="form1" method="post" action="">
			<input type="hidden" id="event_id" name="event_id" />
			<div id="eventEdit" class="modal">
				<div class="modal-content">
					<span class="close">×</span>
                	Title:<input type="text" id="title" name="title" /><br /><br />
               		Start_Date:<input type="text" id="startDate" name="startDate" /><br /><br />
                	End_Date:<input type="text" id="endDate" name="endDate"/><br /><br />
				<input type="button" name="edit" id="edit" value="Edit" onclick="cmdedit();"/>
				<input type="button" name="delete" id="delete" value="Delete" onclick="cmddelete();"/>
              	</div>
       		</div>

       		<div id="eventAdd" class="modal">
				<div class="modal-content">
					<span class="close">×</span>
                	Title:<input type="text" id="title_add" name="title_add" /><br /><br />
               		Start_Date:<input type="text" id="startDate_add" name="startDate_add" /><br /><br />
                	End_Date:<input type="text" id="endDate_add" name="endDate_add"/><br /><br />
				<input type="button" name="add" id="add" value="Add" onclick="cmdsave();"/>
              	</div>
       		</div>

       	<div id='wrap'>

            <div id='calendar'></div>

            <div style='clear:both'></div>

    	</div>
	</form>
    </body>
</html>