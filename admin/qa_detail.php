<?php include('header.php'); 
$sql = "SELECT * FROM t_qa
		WHERE qa_id = ".$_GET['qa_id'];
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span></h3>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="active"><a href="qa.php"><span class="en">ถาม - ตอบ</span><span class="th">ถาม - ตอบ</span></a></li>
					
					
                </ol>
			
			</div>
        </div>
		
	
		<div class="row">
			<div class="col-lg-12">
				<div id="content" class="en">
					<?=$row['content'] ?>
				</div>
				<div id="content" class="th">
					<?=$row['content'] ?>
				</div>
		
				<p class="updateBox">
					<span class="en">Status : </span><span class="th">สถานะ  : </span>
					<?=$row[''] ?>
					
					<span class="en">Update Date : </span><span class="th">บันทึกเมื่อ : </span>
					<? $date = $row['update_date'];
					   //echo date_format($date,'Y/m/d H:i:s');
					   echo $date;
					?>
				</p>
			</div>
			
        </div>
	
</div>



<? include('footer.php'); ?>



