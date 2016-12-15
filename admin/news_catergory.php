<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><span class='en'>ข่าวประชาสัมพันธ์</span><span class='th'>ข่าวประชาสัมพันธ์</span></h1>
				<hr>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
					<li><a href="news_list.php">รีวิวข่าว</a>
                    </li>
                    <li class="active">ข่าวประชาสัมพันธ์</li>
                </ol>
            </div>
        </div>
		<div class='adminDiv text-right'>	
						<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่มหมวดหมู่ข่าว</button>
					</div>
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_news_cat where cat_news_id != 7  ";
				if($_SESSION['userid'] == ""){
					$sql .= "and active = 1";
				}else{
					$sql .= " ";
				}
				$sql .= " ORDER BY sort_order DESC";
				
				//echo $sql;
				
				$objQuery = mysql_query($sql);
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-4 col-sm-6'>
							<div class='news_box1'>";
								echo "<div class='adminDiv text-right col-md-12'>";
										//<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
								
								if($row['flag_index'] == 0){
											
										}else{
											echo "	<a href='#' class='btn btn-default btn-xs' style='color: #000;'>หน้าแรก</a>";
										}
								
								echo " 	<a href='form_news_cat.php?cat_news_id=".$row['cat_news_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
										if($row['active'] == 0){
											echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['cat_news_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
										}else{
											echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['cat_news_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
										}
										echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['cat_news_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>";
														
								//		
								echo "</div>";
								echo "<div class='row'>
										<a href='news.php?Cat=".$row['cat_news_id']."'>";
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
		url: "function/hidden_cat_news.php",
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
		url: "function/show_cat_news.php",
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
		url: "function/add_news_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_news_cat.php?cat_news_id=" + (sxAjax.substr(10)) ;

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
		url: "function/del_news_cat.php",
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



