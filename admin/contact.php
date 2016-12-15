<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en">contact us</span><span class="th">ติดต่อเรา</span>
					
				</h3>
                
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                   
					<li class="active"><span class="en">contact us</span><span class="th">ติดต่อเรา</span></li>
                </ol>
            </div>
        </div>
		<div class="row">
			<?
				$sql = "select * from t_contact
					
						";
						
						
						if($_SESSION['userid'] == ""){
								$sql .= " where active = 1";
						}else{
								$sql .= " ";
						}
						
						
						$sql .= " ORDER BY contact_id DESC ";
						
						$objQuery = mysql_query($sql);
						$data  = mysql_query($sql);	
								
						while ($row = mysql_fetch_array($data)) {
						echo "<div class='col-md-6 col-sm-6'>";
					
						echo "<div  class='adminDiv text-right'> ";
							echo "
													
								<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
								<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
								<a href='form_contact.php?contact_id=".$row['contact_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
								";
								if($row['active'] == 0){
									echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['contact_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
								}else{
									echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['contact_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
								}
														
									echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['contact_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													
								";
					echo "</div>";
					
					
					////////////////////////////////////////////////
					echo "	<div class='contact_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='../".$row['images']."' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
								<p>".$row['lastDate']."</p>
								<a href='contact_detail.php?Id=".$row['contact_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
					";
					if($row['path'] == ""){
						echo "";
						
					}else{
						echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
							  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
					}
								
					echo	"</div>
							</div>";		
							
					echo "</div>";
					
						}
					
					?>

					<div class='col-md-6 col-sm-6'>
						<div class='contact_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='../img/cover/register.png' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>ลงทะเบียน</span> <span class='en'>Register</span></h4>
								<p></p>
								<a href='register.php' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
							</div>
						</div>
					</div>
					
					<div class='col-md-6 col-sm-6'>
						<div class='contact_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='../img/cover/qa.png' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>ถาม - ตอบ Q&A</span> <span class='en'>ถาม - ตอบ Q&A</span></h4>
								<p></p>
								<a href='qa.php' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
							</div>
						</div>
					</div>
					<div class='col-md-6 col-sm-6'>
						<div class='contact_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='../img/cover/freq.png' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>คำถามที่พบบ่อย</span> <span class='en'>คำถามที่พบบ่อย</span></h4>
								<p></p>
								<a href='freq.php' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
							</div>
						</div>
					</div>
					<div class='col-md-6 col-sm-6'>
						<div class='contact_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='../img/cover/survey.png' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>แบบสำรวจ</span> <span class='en'>แบบสำรวจ</span></h4>
								<p></p>
								<a href='survey.php' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
							</div>
						</div>
					</div>
					
						
		
		
		</div>
				
        </div>
		<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
		<input type="hidden" name="ID" id="ID" value="0"> 
</div>
<script type="text/javascript">
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_contact.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_contact.php?"+"contact_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdHidden(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_contact.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShow(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_contact.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

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
		url: "function/del_contact.php",
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


<? include('footer.php'); ?>



