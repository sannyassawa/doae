<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><span class="en">Self-Service</span><span class="th">Self-Service</span></h1>
                <hr>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="active">Self-Service</li>
                </ol>
            </div>
        </div>
		<div class='adminDiv text-right'>	
			
			<a href="form_km_cat.php?cat_km_id=0" class="btn btn-success adminDiv">เพิ่มหมวดหมู่คลังความรู้</a>		
		</div>
	
		<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="km_box1">
				<div class="adminDiv text-right col-md-12"> </div>
				<a href="vdo.php">
					<div class="col-md-4"><img src="../img/cover/DOAE 265x265.png" style="width: 100%;"></div>
				<div class="col-md-8"><h4><span class="th">สื่อมัลติมีเดีย</span> <span class="en" style="display: none;">e_สื่อมัลติมีเดีย</span> </h4></div> 
			</a>
		</div>
		</div>
		
			<?php
				$sql = "SELECT * FROM t_km_cat  ";
				if($_SESSION['userid'] == ""){
					$sql .= " where active = 1";
				}else{
					$sql .= " ";
				}
				$sql .= " ORDER BY sort_order DESC";
				
				//echo $sql;
				
				$objQuery = mysql_query($sql);
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-4 col-sm-6'>
							<div class='km_box1'>";
								echo "<div class='adminDiv text-right col-md-12'>";
										//<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
								
								if($row['flag_index'] == 0){
											
										}else{
											echo "	<a href='#' class='btn btn-default btn-xs' style='color: #000;'>หน้าแรก</a>";
										}
								
								echo " 	<a href='form_km_cat.php?cat_km_id=".$row['cat_km_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
										if($row['active'] == 0){
											echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['cat_km_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
										}else{
											echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['cat_km_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
										}
										echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['cat_km_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>";
														
								//		
								echo "</div>";
								echo "<div class='row'>
										<a href='km_list.php?Cat=".$row['cat_km_id']."'>";
										echo "<div class='col-md-4'>";
										echo "<img src='../".$row['icon']."' style='width: 100%;'>";
										echo "</div>";
										echo "<div class='col-md-8'>";
										echo "<h4><span class='th'>".$row['name']."</span> <span class='en'>".$row['name_en']."</span> </h4>";
										echo "</div>";
										
								echo "  </a>
									  </div>
								
								
								
							</div>
					</div>";
				}
			?>
		
		
			
            
        </div>
		<input type="hidden" name="ID" id="ID" value="0"> 
		<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
</div>
<script type="text/javascript">
function cmdHidden(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_cat_km.php",
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
		url: "function/show_cat_km.php",
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

function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_km_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_km_cat.php?cat_km_id=" + (sxAjax.substr(10)) ;

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
		url: "function/del_km_cat.php",
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



