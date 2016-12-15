<?php
include('header.php');
$valid_formats = array("jpg", "png", "xlsx", "zip", "xls");
$max_file_size = 1024*10000; //100 kb
$path = "upload/files/"; // Upload directory
$path_img = "img/cover/"; // Upload directory

$mpath = "../upload/files/"; // Upload directory
$mpath_img = "../img/cover/"; // Upload directory
$count = 0;
$cat_freq_id = $_GET['cat_freq_id'];
$userid = $_SESSION['userid'];


	if($_SESSION['userid'] == "") {	
		echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='index.php';
				</script>";
			exit();
	}else{
		
	}
	$sql = "select * from t_freq_cat
			where cat_freq_id = ".$_GET['cat_freq_id'];
        
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
		            	$sql = "Update t_freq_cat set
								images = '$path_img$name'
								where cat_freq_id = $cat_freq_id ";
						mysql_query($sql);
		            	$count++; // Number of successfully uploaded files
		            	header("Refresh:0; url=form_cat_freq.php?cat_freq_id=$cat_freq_id");
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
		            	$sql = "INSERT INTO t_freq_cat_file
							(cat_freq_id,name,path,create_id,create_date,update_id,update_date,active)
							VALUES
							('$cat_freq_id','$name','$path$name','$userid',now(),'$userid',now(),'1')
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
                <h3 class="page-header">จัดการคลังความรู้</h3>
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
						   <input type="hidden" name="cat_freq_id" id="cat_freq_id" value="<?=$_GET['cat_freq_id'] ?>">
						   <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
								<div class="form-group">
                                    <label>หัวข้อภาษาไทย</label>
                                    <input class="form-control" id="title" name="title" value="<?=$row['name'] ?>">
                                    <p class="help-block">โปรดระบุ</p>
                                </div>
								<div class="form-group">
                                    <label>หัวข้อภาษาอังกฤษ</label>
                                    <input class="form-control" id="title_en" name="title_en" value="<?=$row['name_en'] ?>">
                                    <p class="help-block">โปรดระบุ</p>
                                </div>
								
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

	window.location.href = "contact_list.php";

}

function cmdSave(){

	var cate = $('#cat_freq_id').val();
	//alert('pun');


	var params = "n=" + Math.random();

    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#cat_freq_id').serialize();
	params = params + "&" + $('#user_id').serialize();
	params = params + "&" + $('#title').serialize();
	params = params + "&" + $('#title_en').serialize();
	
	//alert(params);

	

	$.ajax({
		type: "POST",
		url: "function/save_cat_freq.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "contact_list.php";

			} else {
				alert(sxAjax);
			}	
		}
	});	
}


</script>



<?php include('footer.php'); ?>


