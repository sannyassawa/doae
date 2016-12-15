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
		
	
		<div class="row">
		<div class="col-md-4 col-sm-6">
							<div class="km_box1"><div class="row">
										<a href="vdo.php"><div class="col-md-4"><img src="img/cover/DOAE 265x265.png" style="width: 100%;"></div><div class="col-md-8"><h4><span class="th">สื่อมัลติมิเดีย</span> <span class="en" style="display: none;">สื่อมัลติมิเดีย</span> </h4></div>  </a>
									  </div>
								
								
								
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
								
								echo "<div class='row'>
										<a href='km_list.php?Cat=".$row['cat_km_id']."'>";
										echo "<div class='col-md-4'>";
										echo "<img src='".$row['icon']."' style='width: 100%;'>";
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
</script>

<? include('footer.php'); ?>



