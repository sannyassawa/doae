<?php
include('header.php');
$valid_formats = array("jpg", "png", "xlsx", "zip", "xls");
$max_file_size = 1024*10000; //100 kb
$path = "upload/files/"; // Upload directory
$path_img = "img/cover/"; // Upload directory

$mpath = "../upload/files/"; // Upload directory
$mpath_img = "../img/cover/"; // Upload directory
$count = 0;
$contact_id = $_GET['contact_id'];
$userid = $_SESSION['userid'];


	if($_SESSION['userid'] == "") {	
		echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='index.php';
				</script>";
			exit();
	}else{
		
	}
	$sql = "select * from t_contact
			where contact_id = ".$_GET['contact_id'];
        
    //echo $sql;
	$objQuery = mysql_query($sql);
	$row = mysql_fetch_array($objQuery);
	//echo $row['cover'];
				


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
		            	$sql = "Update t_contact set
								images = '$path_img$name'
								where contact_id = $contact_id ";
						mysql_query($sql);
		            	$count++; // Number of successfully uploaded files
		            	header("Refresh:0; url=form_contact.php?contact_id=$contact_id");
		            }
		        }
		    }
		    
		}
	}
}

	//echo "<br />";
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
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
		            	$sql = "INSERT INTO t_contact_file
							(contact_id,name,path,create_id,create_date,update_id,update_date,active)
							VALUES
							('$contact_id','$name','$path$name','$userid',now(),'$userid',now(),'1')
							";
						mysql_query($sql);
		            	$count++; // Number of successfully uploaded files
						header("Refresh:0; url=form_contact.php?contact_id=$contact_id");
		            }
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
                <h3 class="page-header">จัดการข้อมูลการติดต่อ</h3>
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
						   <input type="hidden" name="contact_id" id="contact_id" value="<?=$_GET['contact_id'] ?>">
						   <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
								<div class="form-group">
                                    <label>รูปภาพหน้าปก</label>
                                    <p><img src="../<?=$row['images'] ?>" height="155" width="265" /></p>
									<input class="input-group" type="file" name="images[]" id="images" accept="image/*" />
									<input type="submit" name="imagesupload" id="imagesupload" value="ImagesUpload!"  />
									<p class="help-block">โปรดระบุ ขนาดรูปภาพ : 265x 155px</p>
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

								$sql = "SELECT file_id,name,path from t_contact_file
										WHERE active = 1 AND contact_id = ".$_GET['contact_id'];
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

	window.location.href = "contact.php";

}

function cmdSave(){


	
	for ( instance in CKEDITOR.instances )
    CKEDITOR.instances[instance].updateElement();

	var params = "n=" + Math.random();

    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#contact_id').serialize();
    params = params + "&" + $('#cat_contact_id').serialize();
	params = params + "&" + $('#title').serialize();
	params = params + "&" + $('#title_en').serialize();
	params = params + "&" + $('#content').serialize();
	params = params + "&" + $('#content_en').serialize();
	

	$.ajax({
		type: "POST",
		url: "function/save_contact.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "contact.php";

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
		url: "function/file_del_contact.php",
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


