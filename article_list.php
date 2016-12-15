<?php include('header.php'); 
$sql1 = "SELECT * FROM t_article where active = 1 AND article_id = ".$_GET['Id'];
//echo $sql1;
$objQuery1 = mysql_query($sql1);
$row1 = mysql_fetch_array($objQuery1);


?>


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
                    <li>
						<span class="en"><a href="article.php">Self-Service</a></span>
						<span class="th"><a href="article.php">Self-Service</a></span>
					</li>
					<li class="active">
						<span class="en"><?=$row1['title_en'] ?></span><span class="th"><?=$row1['title'] ?></span>
					</li>
                </ol>
            </div>
			
        </div>
		
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_article where active = 1 AND parent_id = ".$_GET['Id']." ORDER BY sort_order ASC";
				$objQuery = mysql_query($sql);
				//echo $sql;
				
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-3 col-sm-6 text-center'>
							<div class='article_box'>";
								
							echo "<a href='article_detail.php?Id=".$row['article_id']."'>";
							echo " <img src='".$row['cover']."'>
										</h4><span class='th'>".$row['title']."</span>
										<span class='en'>".$row['title_en']."</span> 
										
									</h4>
								</a>
							</div>
						</div>";
				}
			?>
		
		
			
            
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
		url: "function/add_article.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_article.php?"+"article_id=" + (sxAjax.substr(10)) ;

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
		url: "function/hidden_article.php",
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
		url: "function/show_article.php",
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
		url: "function/del_article.php",
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






