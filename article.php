<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">Self-Service</span>
					<span class="th">Self-Service</span>
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">Self-Service</span>
						<span class="th">Self-Service</span>
					</li>
                </ol>
            </div>
        </div>
		
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_article_cat  ";
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
										<a href='article_sub.php?Cat=".$row['cat_article_id']."'>";
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
		url: "function/hidden_cat_article.php",
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
		url: "function/show_cat_article.php",
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



