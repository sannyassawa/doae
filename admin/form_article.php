<?php
include('header.php');
$valid_formats = array("jpg", "png", "xlsx", "zip", "xls");
$max_file_size = 1024*10000; //100 kb
$path = "upload/files/"; // Upload directory
$path_img = "img/cover/"; // Upload directory

$mpath = "../upload/files/"; // Upload directory
$mpath_img = "../img/cover/"; // Upload directory
$count = 0;
$article_id = $_GET['article_id'];
$userid = $_SESSION['userid'];


	if($_SESSION['userid'] == "") {	
		echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='index.php';
				</script>";
			exit();
	}else{
		
	}
	$sql = "select * from t_article
			where article_id = ".$_GET['article_id'];
			
			
        
    //echo $sql;
	$objQuery = mysql_query($sql);
	$row = mysql_fetch_array($objQuery);
	//echo $row['cover'];
	
	if(isset($_POST['btn_save_updates']))
	{
		// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
	        else{ // No error found! Move uploaded files
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $mpath_img.$name)) {
	            	
	            	$count++; // Number of successfully uploaded files
	            }
	        }
	    }
	}
}
						


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){

	// Loop $_FILES to execute all files
	

	if(file_exists($_FILES['images']['tmp_name'][0])){
		//echo "has images";
		foreach ($_FILES['images']['name'] as $f => $name) {     
		    if ($_FILES['images']['error'][$f] == 4) {
		        continue; // Skip file if any error found
		    }
		    if ($_FILES['images']['error'][$f] == 0) {	           
		        if ($_FILES['images']['size'][$f] > $max_file_size) {
		            $message[] = "$name is too large!.";
		            continue; // Skip large files
		        }
		        else{ // No error found! Move uploaded files
		            if(move_uploaded_file($_FILES["images"]["tmp_name"][$f], $mpath_img.$name)) {
		            	$sql = "Update t_article set
								cover = '$path_img$name'
								where article_id = $article_id ";
						mysql_query($sql);
		            	$count++; // Number of successfully uploaded files
		            	header("Refresh:0; url=form_article.php?article_id=$article_id");
		            }
		        }
		    }
		    
		}
	}
}

	//echo "<br />";

	if(file_exists($_FILES['files']['tmp_name'][0])){
		//echo "has files";
		foreach ($_FILES['files']['name'] as $f => $name) {     
		    if ($_FILES['files']['error'][$f] == 4) {
		        continue; // Skip file if any error found
		    }
		    if ($_FILES['files']['error'][$f] == 0) {	           
		        if ($_FILES['files']['size'][$f] > $max_file_size) {
		            $message[] = "$name is too large!.";
		            continue; // Skip large files
		        }
		        else{ // No error found! Move uploaded files
		            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $mpath.$name)) {
		            	$sql = "INSERT INTO t_article_file
							(article_id,name,path,create_id,create_date,update_id,update_date,active)
							VALUES
							('$article_id','$name','$path$name','$userid',now(),'$userid',now(),'1')
							";
						mysql_query($sql);
		            	$count++; // Number of successfully uploaded files
		            }
		        }
		    }
		    
		}
	}


?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">จัดการบทความเกษตร</h3>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                   
					
					
                </ol>
			</div>
        </div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <input type="button" class="btn btn-primary" onclick="cmdSave()" value="บันทึก">
							<input type="button" class="btn btn-danger" onclick="cmdCancel()" value="ยกเลิก">
							<input type="hidden" name="delID" id="delID" value="0"> 
                        </div>
                        <div class="panel-body">
                           <form id="frmNews" name="frmNews"  action="" method="POST" enctype="multipart/form-data">
						   <input type="hidden" name="article_id" id="article_id" value="<?=$_GET['article_id'] ?>">
						   <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
								<div class="form-group">
                                    <label>รูปภาพหน้าปก</label>
                                    <p><img src="<?=$row['cover'] ?>" height="265" width="265" /></p>
									<input class="input-group" type="file" name="images[]" id="images" accept="image/*" />
									<input type="submit" name="imagesupload" id="imagesupload" value="ImagesUpload!"  />
									<p class="help-block">โปรดระบุ ขนาดรูปภาพ : 265 x 265px</p>
                                </div>
								<div class="form-group">
                                    <label>หมวดหมู่</label>
                                    <select class="form-control" name="cat_article_id" id="cat_article_id" >
										<?php
											
											$sql2 = "SELECT * FROM t_article
													WHERE article_id = ".$row['parent_id'];
													$objQuery2 = mysql_query($sql2);
													$row2 = mysql_fetch_array($objQuery2);
														echo "<option value='".$row2['article_id']."'>".$row2['title']."</option>";
													
											
											$sql1 = "SELECT * FROM t_article
													WHERE active = 1 and parent_id = 0";
											$objQuery1 = mysql_query($sql1);
											while ($row1 = mysql_fetch_array($objQuery1)) {
												echo "<option value='".$row1['article_id']."'>".$row1['title']."</option>";	
											}
										?>
								
									</select>
																		
                                    <p class="help-block">โปรดระบุ</p>
                                </div>
								<div class="form-group">
                                    <label>หัวข้อภาษาไทย</label>
                                    <input class="form-control" id="title" name="title" value="<?=$row['title'] ?>">
                                    <p class="help-block">โปรดระบุ</p>
                                </div>
								<div class="form-group">
                                    <label>หัวข้อภาษาอังกฤษ</label>
                                    <input class="form-control" id="title_en" name="title_en" value="<?=$row['title_en'] ?>">
                                    <p class="help-block">โปรดระบุ</p>
                                </div>
								<div class="form-group">
                                    <label>เนื้อหาภาษาไทย</label>
                                   
                                    <script src="ckeditor.js"></script>
										<textarea cols="80" id="content" name="content" rows="100">
											<?php echo $row['content']; ?>
										</textarea>

										<script>

											CKEDITOR.replace( 'content', {
												language: 'th'
											} );

										</script>
									<p class="help-block">โปรดระบุ</p>
                                </div>
								<div class="form-group">
                                    <label>เนื้อหาภาษาอังกฤษ</label>
                                    <textarea cols="80" id="content_en" name="content_en" rows="100">
											<?php echo $row['content_en']; ?>
										</textarea>

										<script>

											CKEDITOR.replace( 'content_en', {
												language: 'th'
											} );

										</script>
                                    <p class="help-block">โปรดระบุ</p>
                                </div>
							</form>

							<form id="fileupload" action="" method="POST" enctype="multipart/form-data">
    						<input type="file" id="files" name="files[]" multiple="multiple" accept="/*" />
  							<input type="submit" name="fileupload" id="fileupload" value="FilesUpload!"  />
							<br/>
							<?

								$sql = "SELECT file_id,name,path from t_article_file
										WHERE active = 1 AND article_id = ".$_GET['article_id'];
								$objQuery = mysql_query($sql);				
									while ($row = mysql_fetch_array($objQuery)) {
										$name = $row["name"];
										$path = $row["path"];
										$file_id = $row["file_id"];
								?>
								<br/>
								<label><? echo $name ?></label>
<input type="button" class="btn btn-danger" onclick="cmdDelete(<? echo $file_id; ?>)" value="Delete">
								<?}
								//echo $path;
							?>

							</form>
								
							
							<!-- The blueimp Gallery widget -->
							<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
								<div class="slides"></div>
								<h3 class="title"></h3>
								<a class="prev">‹</a>
								<a class="next">›</a>
								<a class="close">×</a>
								<a class="play-pause"></a>
								<ol class="indicator"></ol>
							</div>
						   
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                    </div>
                </div>
			</div>
				
		</div>
		
</div>
<script type="text/javascript">
function cmdCancel(){
	var cate = $('#cat_article_id').val();
	window.location.href = "article_list.php?Id=" + cate;

}

function cmdSave(){

	var cate = $('#cat_article_id').val();
	//alert('pun');
	
	for ( instance in CKEDITOR.instances )
    CKEDITOR.instances[instance].updateElement();

	var params = "n=" + Math.random();

    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#article_id').serialize();
    params = params + "&" + $('#cat_article_id').serialize();
	params = params + "&" + $('#title').serialize();
	params = params + "&" + $('#title_en').serialize();
	params = params + "&" + $('#content').serialize();
	params = params + "&" + $('#content_en').serialize();
	

	$.ajax({
		type: "POST",
		url: "function/save_article.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "article_list.php?Id=" + cate;

			} else {
				alert(sxAjax);
			}	
		}
	});	
}

function cmdDelete(ID){
document.getElementById('delID').value = ID;
var params = "n=" + Math.random();
	params = params + "&" + $('#delID').serialize();

$.ajax({
		type: "POST",
		url: "function/file_del_article.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบไฟล์เรียบร้อยแล้ว')
				location.reload();
			} else {
				alert(sxAjax);
			}	
		}
});

}

</script>



<?php include('footer.php'); ?>


