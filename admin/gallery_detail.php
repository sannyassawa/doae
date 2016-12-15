<?php include('header.php'); 
$sql = "SELECT gallery_id,
				images,
				title_en,
				title,
				content_en,
				content,
				template,
				parent_id,
				create_id,
				create_date,
				update_id,
				DATE_FORMAT(update_date,'%d/%m/%Y') as update_date,
				sort_order,
				active
				FROM t_gallery where active = 1 AND gallery_id = ".$_GET['Id'];
				
				//echo $sql;

 $objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
				</h1>
				<div class='adminDiv text-right'>	
						<a href="form_gallery.php?gallery_id=<?=$_GET['Id'] ?>" class="btn btn btn-info adminDiv" >แก้ไข</a>
				</div>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="gallery_list.php">ภาพกิจกรรม</a></span>
						<span class="th"><a href="gallery_list.php">ภาพกิจกรรม</a></span>
					</li>
					<li class="active">
						<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
					</li>
                </ol>
            </div>
        </div>
		
	
		<div class="row">
			<div class="col-lg-12">
				<div id="content" class="en">
					<?=$row['content_en'] ?>
				</div>
				<div id="content" class="th">
					<?=$row['content'] ?>
				</div>
				<ul class="row first">
								<?

								$sql1 = "SELECT * FROM t_gallery_file
										WHERE active = 1 AND gallery_id = ".$_GET['Id'];
								$objQuery1 = mysql_query($sql1);				
									while ($row1 = mysql_fetch_array($objQuery1)) {
										$name = $row1["name"];
										$path = $row1["path"];
										$file_id = $row1["file_id"];
										
								?>
								
									<li>
										<img alt="<?=$name ?>"  src="../<?=$path ?>">
										<div class="text"><?=$name ?></div>
										<p class="text-right adminDiv"><a href="#" class="btn btn-danger btn-xs" onclick="cmdDelete(<? echo $file_id; ?>)"><i class="fa fa-trash-o"></i> ลบ</a></p>
									</li>
								
								
							
								<?}
								//echo $path;
							?>
							</ul>
				<p class="updateBox">
					<span class="en">Update Date : </span><span class="th">บันทึกเมื่อ : </span>
					<? 
					   echo $row['update_date'];
				
					?>
				</p>
			</div>
			
        </div>
</div>



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<style>
    @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

      body {
        background:#ebebeb;
      }
      ul {
          padding:0 0 0 0;
          margin:0 0 40px 0;
      }
      ul li {
          list-style:none;
          margin-bottom:10px;
      }

    .text {
      /*font-family: 'Bree Serif';*/
      color:#666;
      font-size:11px;
      margin-bottom:10px;
      padding:12px;
      background:#fff;
    }

.navbar-inverse {
    background-color: rgba(255, 255, 255, 0);
    border-color: rgba(255, 255, 255, 0);
}
body {
    background: #fff;
}
.navbar-inverse .navbar-nav>li>a {
    color: #000;
}

  </style>


	

<?php include('footer.php'); ?>
    <link href="js/jquery.bsPhotoGallery.css" rel="stylesheet">
    <script src="js/jquery.bsPhotoGallery.js"></script>

	
	
 <script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
          "hasModal" : true,
          // "fullHeight" : false
        });
      });
</script>




