<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">ข้อมูลการติดต่อ</span><span class="th">ข้อมูลการติดต่อ</span>
				
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">Register</span>
						<span class="th">สมัครสมาชิก</span>
					</li>
					
                </ol>
				
            </div>
        </div>
		
	
		<div class="row">
			<div class="col-md-6">
				<h3>
					<span class="en">Register</span><span class="th">ลงทะเบียน</span>
				
				</h3>
				<div class="form-group">
                    <label>email</label>
                    <input class="form-control" id="email" name="email" value="">
                </div>
				<div class="form-group">
                    <label>รหัสผ่าน</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
				<div class="form-group">
                    <label>ยืนยันรหัสผ่าน</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" value="">
                </div>
				<div class="form-group">
                    <label>ชื่อ-นามสกุล</label>
                    <input class="form-control" id="name" name="name" value="">
                </div>
				<div class="form-group">
                    <label>หมายเลขโทรศัพท์</label>
                    <input class="form-control" id="phone" name="phone" value="">
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
                    <input type="checkbox" id="confirm" name="confirm" value="1">
					<a href="">นโยบายในการคุ้มครองข้อมูลส่วนตัว</a>
                </div>
				<div class="form-group">
                    <input type="button" value="ลงทะเบียน" onclick="cmdNew()">
					<input type="button" value="ล้างค่า">
                </div>
			</div>
			<div class="col-md-6">
				<div class="BoxLogin">
					<h3>
						<span class="en">Login</span><span class="th">เข้าสู่ระบบ</span>
					
					</h3>
					<div class="form-group">
						<label>email</label>
						<input class="form-control" id="lemail" name="lemail" value="">
					</div>
					<div class="form-group">
						<label>รหัสผ่าน</label>
						<input type="password" class="form-control" id="lpassword" name="lpassword" value="">
					</div>
					<div class="form-group">
						<a href="#" style="float: right;" onclick="cmdFogot()">ลืมรหัสผ่าน</a>
						<input type="button" value="เข้าสู่ระบบ" onclick="cmdLogin()">
					</div>
				</div>
				
				<div class="forgot" id="forgot">
					<h3>
						<span class="en">ลืมรหัสผ่าน</span><span class="th">ลืมรหัสผ่าน</span>
					
					</h3>
					<div class="form-group">
						<label>email</label>
						<input class="form-control" id="semail" name="semail" value="">
					</div>
					<div class="form-group">
						<input type="button" value="ยืนยัน" onclick="cmdSent()">
					</div>
				</div>
			</div>
			
        </div>
</div>

<input type="hidden" name="parent_id" id="parent_id" value="<?=$_GET['Id'] ?>">
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
   $('#forgot').hide();
});


function cmdFogot(){
	$('.forgot').show();
	$('.BoxLogin').hide();
}
function cmdNew(){
	
	if($('#email').val() == ""){
		alert('กรุณากรอกอีเมล์');
		return true;
	}else if($('#password').val() != $('#cpassword').val()){
		alert('ยืนยันรหัสผ่านไม่ถูกต้อง');
		return true;
	}else if($('#name').val() == ""){
		alert('กรุณากรอกชื่อ-นามสกุล');
		return true;
	}else if($('#phone').val() == ""){
		alert('กรุณาหมายเลขโทรศัพท์');
		return true;
	}else if($('#code').val() != $('#textcode').val()){
		alert('รหัสผ่านความปลอดภัยไม่ถูกต้อง');
		return true;
	}
	else if($('#confirm').val() != 1){
		alert('ยืนยันการให้ข้อมูล');
		return true;
	}

	var params = "n=" + Math.random();
	params = params + "&" + $('#email').serialize();
	params = params + "&" + $('#password').serialize();
	params = params + "&" + $('#phone').serialize();
	params = params + "&" + $('#name').serialize();

	
	$.ajax({
		type: "POST",
		url: "function/register.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกข้อมูลเรียบร้อยแล้ว กรุณาลงทะเบียนเข้าสู่ระบบ');
                document.location.href="register.php" ;

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



