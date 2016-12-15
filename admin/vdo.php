<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en">VDO</span><span class="th">หมวดหมู่สื่อมัลติมิเดีย</span></h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                
					<li class="active"><span class="en">VDO</span><span class="th">หมวดหมู่สื่อมัลติมิเดีย</span></li>
                </ol>
            </div>
        </div>
		<div class='adminDiv text-right'>	
						<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่ม</button>
					</div>
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_vdo_cat  ";
				if($_SESSION['userid'] == ""){
								$sql .= "where active = 1";
						}else{
								$sql .= " ";
						}
				//echo $sql;

				
				$objQuery = mysql_query($sql);
			
				
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-3 col-sm-6 text-center'>
							<div class='vdo_box'>";
								echo "<div  class='adminDiv text-right'> ";
									
									echo "
															
										<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
										<a href='form_vdo_cat.php?cat_vdo_id=".$row['cat_vdo_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										";
										if($row['active'] == 0){
											echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['cat_vdo_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
										}else{
											echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['cat_vdo_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
										}
																
											echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['cat_vdo_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
															
										";
							echo "</div>";	
							echo "<a href='vdo_list.php?Cat=".$row['cat_vdo_id']."'>";
							
							echo " <img src='../".$row['cover']."' style='width: 100%;height: 200px;'>";
							echo "<br>";
							echo "	</h4><span class='th'>".$row['name']."</span>
										<span class='en'>".$row['name_en']."</span> 
										
									</h4>
								</a>
							</div>
						</div>";
				}
			?>
				
        </div>
</div>

<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 
<script type="text/javascript">
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_vdo_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_vdo_cat.php?"+"cat_vdo_id=" + (sxAjax.substr(10)) ;

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
		url: "function/hidden_vdo_cat.php",
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
		url: "function/show_vdo_cat.php",
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
		url: "function/del_vdo_cat.php",
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



