<?php include('header.php'); 
$sql1 = "SELECT * FROM t_about where active = 1 AND about_id = ".$_GET['Id'];
$objQuery1 = mysql_query($sql1);
$row1 = mysql_fetch_array($objQuery1);
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
					<span class="en"><?=$row1['title_en'] ?></span><span class="th"><?=$row1['title'] ?></span>
				
				</h2>
				<hr>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="about.php">เกี่ยวกับหน่วยงาน</a></span>
						<span class="th"><a href="about.php">เกี่ยวกับหน่วยงาน</a></span>
					</li>
					<li class="active">
						<span class="en"><?=$row1['title_en'] ?></span><span class="th"><?=$row1['title'] ?></span>
					</li>
                </ol>
			
            </div>
        </div>
		
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_about where active = 1 and ";
				
						$sql .= " parent_id = ".$_GET['Id'];
						
						$sql .= " ORDER BY sort_order ASC ";
				
				//echo $sql;
				$objQuery = mysql_query($sql);
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-6 col-sm-6'>";
					
					
					
					
					////////////////////////////////////////////////
					echo "	<div class='about_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='".$row['icon']."' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
								<p>".$row['lastDate']."</p>
								<a href='about_detail.php?id=".$row['about_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
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
					
					?>
						
					<?php
					}
					?>
		
		
			
            
        </div>
</div>

<input type="hidden" name="parent_id" id="parent_id" value="<?=$_GET['Id'] ?>">
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 

<script type="text/javascript">
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#parent_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_about.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_about.php?"+"about_id=" + (sxAjax.substr(10)) ;

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
		url: "function/hidden_about.php",
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
		url: "function/show_about.php",
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
		url: "function/del_about.php",
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



