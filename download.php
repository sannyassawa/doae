<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">แบบฟอร์มสำหรับดาวน์โหลด</span>
					<span class="th">แบบฟอร์มสำหรับดาวน์โหลด</span>
					
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">แบบฟอร์มสำหรับดาวน์โหลด</span>
						<span class="th">แบบฟอร์มสำหรับดาวน์โหลด</span>
					</li>
					
                </ol>
            </div>
		
        </div>
		
	
		<div class="row">
			<div class="col-lg-12">
				<?php
							$sql = "SELECT *FROM t_download_file ";
							if($_SESSION["userid"] == "") {
								$sql .= "WHERE active = 1";
							}else{
								
							}
							$objQuery = mysql_query($sql);
						
								while ($row = mysql_fetch_array($objQuery)) {
							
										echo "<p><a href='".$row['path']."'>".$row['name']."</a>";
										echo "</p>";
										
								
										
								}
							
			?>
			</div>
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
		url: "function/add_download_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_download.php?"+"download_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

</script>




<? include('footer.php'); ?>



