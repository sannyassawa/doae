<?php include('header.php'); 
$sql = "SELECT * 
		FROM t_member 
		left join t_subscribe on t_member.member_id = t_subscribe.member_id 
		where token = '".$_GET['token']."' AND active = 1 ";
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);
//echo $sql;

echo "<input type='hidden' name='member_id' id='member_id' value='".$row['member_id']."'> ";
echo "<input type='hidden' name='token' id='token' value='".$_GET['token']."'> ";
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
					ยินดีต้อนรับคุณ  <?=$row['name'] ?>
				
				</h4>
            </div>
        </div>
		
	
		<div class="row">
			<div class="col-md-12">
				<p>เลือกข่าวสารที่ต้องการแจ้งไปยังอีเมล์</p>
				<ul>
					<li class="active">	
						<input type="checkbox" id="news1" name="news1" value="1" <? if($row['news1'] == 1) echo "checked";?>>
						<span class="th">ข่าวกิจกรรมและภารกิจผู้บริหาร</span>
					</li>
					<li class="">	
						<input type="checkbox" id="news2" name="news2" value="1" <? if($row['news2'] == 1) echo "checked";?>>
						<span class="th">ข่าวประชาสัมพันธ์ทั่วไป</span>
					</li>
					<li class="">	
						<input type="checkbox" id="news3" name="news3" value="1" <? if($row['news3'] == 1) echo "checked";?> >
						<span class="th">ข่าวประกาศรับสมัครงาน</span>
					</li>
					<li class="">	
						<input type="checkbox" id="news4" name="news4" value="1" <? if($row['news4'] == 1) echo "checked";?>>
						<span class="th">ข่าวการจัดซื้อจัดจ้าง</span>
					</li>
					<li class="">	
						<input type="checkbox" id="news5" name="news5" value="1" <? if($row['news5'] == 1) echo "checked";?>>
						<span class="th">ข่าวการฝึกอบรม</span>
					</li>
					<li class="">	
						<input type="checkbox" id="news6" name="news6" value="1" <? if($row['news6'] == 1) echo "checked";?>>
						<span class="th">ข่าวภูมิภาค</span>
					</li>
				</ul>
				<input type="button" onclick="cmdSave()" value="บันทึก">
			</div>
        </div>
</div>

<input type="hidden" name="parent_id" id="parent_id" value="<?=$_GET['Id'] ?>">
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 


<script type="text/javascript">
function cmdSave(){


	var token = $('#token').serialize();
	var params = "n=" + Math.random();

	params = params + "&" + $('#member_id').serialize();
	params = params + "&" + $('#news1').serialize();
	params = params + "&" + $('#news2').serialize();
	params = params + "&" + $('#news3').serialize();
	params = params + "&" + $('#news4').serialize();
	params = params + "&" + $('#news5').serialize();
	params = params + "&" + $('#news6').serialize();

	$.ajax({
		type: "POST",
		url: "function/save_subscribe.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "subscribe.php?token=" + token;

			} else {
				alert(sxAjax);
			}	
		}
	});	
}


</script>


<? include('footer.php'); ?>



