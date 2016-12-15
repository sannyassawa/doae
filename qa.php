<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">ถาม - ตอบ</span><span class="th">ถาม - ตอบ</span>
				
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">ถาม - ตอบ</span>
						<span class="th">ถาม - ตอบ</span>
					</li>
					
                </ol>
				
            </div>
        </div>
		
	
		<div class="row">
			<div class="col-md-6">
				<h3>
					<span class="en">ถาม - ตอบ</span>
					<span class="th">ถาม - ตอบ</span>
				
				</h3>
				<div class="form-group">
                    <label>ชื่อผู้ติดต่อ</label>
                    <input class="form-control" id="name" name="name" value="">
                </div>
				<div class="form-group">
                    <label>อีเมล์</label>
                    <input class="form-control" id="email" name="email" value="">
                </div>
				<div class="form-group">
                    <label>โทรศัพท์</label>
                    <input class="form-control" id="phone" name="phone" value="">
                </div>
				<div class="form-group">
                    <label>คุณคือใคร</label>
					
                    <input type="radio" id="cus_type" name="cus_type" value="1" checked="checked"> เกษตรกร
					<input type="radio" id="cus_type" name="cus_type" value="2"> บุคคลทั่วไป
					
                </div>
				<div class="form-group">
                    <label>ประเภทเรื่องที่ติดต่อ</label>
						<select class="form-control" name="con_type" id="con_type" >
							<?php
										
								$sql1 = "SELECT * FROM t_con_type
										WHERE active = 1";
								$objQuery1 = mysql_query($sql1);
								while ($row1 = mysql_fetch_array($objQuery1)) {
										echo "<option value='".$row1['con_type_id']."'>".$row1['name']."</option>";	
								}
							?>
								
						</select>
                </div>
				<div class="form-group">
                    <label>หน่วยงานที่รับผิดชอบ</label>
                    <input class="form-control" id="respons" name="respons" value="กองพัฒนาเกษตรกร">
                </div>
				<div class="form-group">
                    <label>ชื่อเรื่อง / ประเด็นที่สอบถาม</label>
                    <input class="form-control" id="title" name="title" value="">
                </div>
				<div class="form-group">
                    <label>คำถาม</label>
                    <textarea class="form-control" rows="5" id="content" name="content" ></textarea>
                </div>
				<div class="form-group">
                    <?function randomToken($len) { 
					srand( date("s") ); 
					$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"; 
					$chars.= "1234567890!@#$%^&*"; // กำหนดอักขษะที่จะนำมา random แก้ได้นะ 
					$ret_str = ""; 
					$num = strlen($chars); 
					for($i=0; $i < $len; $i++) { 
					$ret_str.= $chars[rand()%$num]; // ใช้ฟังชั่น rand() เข้ามาช่วยในการทำงาน 
					} 
					return $ret_str; 
					} ?>
					<? 
					$code = randomToken(5); // เรียกฟังชั่นขึ้นมาใช้งาน โดยกำหนดค่า พารามิเตอร์ลงไป ว่าจะใช้กี่ตัวอักษร ในตัวอย่างใช้ 5 ตัวอักษรครับ 
					
					echo "<input class='' id='code' name='code' value='$code' readonly>";
					
					?>
                </div>
				<div class="form-group">
                    <label>ป้อนรหัสผ่านความปลอดภัย</label>
                    <input class="form-control" id="textcode" name="textcode" value="">
                </div>
			
				<div class="form-group">
                    <input type="button" value="ลงทะเบียน" onclick="cmdNew()">
					<input type="button" value="ล้างค่า">
                </div>
			</div>
			<div class="col-md-6">
				<h3>
					<span class="en">คำถาม</span>
					<span class="th">คำถาม</span>
				
				</h3>
				<table class='table table-striped'>
					<?php
						$sql = "SELECT
								t_qa.qa_id,
								t_qa.`title`,
								t_qa.update_date,
								t_status.`name`
								FROM
								t_qa
								INNER JOIN t_status ON t_status.status_id = t_qa.`status`
								ORDER BY t_qa.update_date DESC";
							$objQuery = mysql_query($sql);
							
									$data = mysql_query($sql);
								
									$Num_Rows = mysql_num_rows($data);
									$Per_Page = 20;   // Per Page
									
									$Page = $_GET["Page"];
									if(!$_GET["Page"])
									{
										$Page=1;
									}
									
									$Prev_Page = $Page-1;
									$Next_Page = $Page+1;
									
									$Page_Start = (($Per_Page*$Page)-$Per_Page);
									if($Num_Rows<=$Per_Page)
									{
										$Num_Pages =1;
									}
									else if(($Num_Rows % $Per_Page)==0)
									{
										$Num_Pages =($Num_Rows/$Per_Page) ;
									}
									else
									{
										$Num_Pages =($Num_Rows/$Per_Page)+1;
										$Num_Pages = (int)$Num_Pages;
									}
									
									$sql .=" LIMIT $Page_Start , $Per_Page";
									$data  = mysql_query($sql);
									
									while ($row = mysql_fetch_array($data)) {
										
										echo "<tr>";
											echo "<td>".$row['update_date']."</td>";
											
											echo "<td><a href='qa_detail.php?qa_id=".$row['qa_id']."'>".$row['title']."</a></td>";
											echo "<td>".$row['name']."</td>";
											
										echo "</tr>";
									}


									?>
										
									<?php
									
									
									
									echo "</table>";
									?>
									<br clear="all">
									<br clear="all">
									<br clear="all">
									<div class="row text-center">
										<div class="col-lg-12">
											<ul class="pagination">
												<li>
													<?
														if($Prev_Page)
														{
															echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&Cat=$_GET[Cat]' id='linkdone'><<</a> ";
														}
													?>
												</li>
												<?
													for($i=1; $i<=$Num_Pages; $i++){
													if($i != $Page)
													{
														echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i&Cat=$_GET[Cat]'>$i</a><li> ";
													}
													else
													{
														echo "<li class='active'><a href='#'>$i</a></li>";
													}
												}
												?>
												
												<li>
													<? 
														if($Page!=$Num_Pages)
														{
															echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&Cat=$_GET[Cat]' id='linkdone'>>></a> ";
														}
													?>
												</li>
												
											</ul>
										</div>
									</div>
								
								
					<?			
								
								
							echo "</div>"; //จบ div tab
						
					?>
				</table>
				
			
			</div>
			
        </div>
</div>

<input type="hidden" name="parent_id" id="parent_id" value="<?=$_GET['Id'] ?>">
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 

<script type="text/javascript">
$( document ).ready(function() {
	$('.forgot').hide();
    
});
function cmdFogot(){
	$('.forgot').show();
	$('.BoxLogin').hide();
}
function cmdNew(){
	
	if($('#code').val() != $('#textcode').val()){
		alert('รหัสผ่านความปลอดภัยไม่ถูกต้อง');
		return true;
	}
	

	var params = "n=" + Math.random();
	params = params + "&" + $('#name').serialize();
	params = params + "&" + $('#phone').serialize();
	params = params + "&" + $('#email').serialize();
	params = params + "&" + $('#cus_type').serialize();
	params = params + "&" + $('#con_type').serialize();
	params = params + "&" + $('#respons').serialize();
	params = params + "&" + $('#title').serialize();
	params = params + "&" + $('#content').serialize();

	
	$.ajax({
		type: "POST",
		url: "function/save_qa.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="qa.php" ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdLogin(){
	var params = "n=" + Math.random();
	params = params + "&" + $('#lemail').serialize();
	params = params + "&" + $('#lpassword').serialize();
	

	
	$.ajax({
		type: "POST",
		url: "function/login_member.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="subscribe.php?"+"token=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	
	
}

</script>


<? include('footer.php'); ?>



