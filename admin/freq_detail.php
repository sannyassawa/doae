<?php include('header.php'); 
$sql = "SELECT * FROM t_freq where active = 1 AND freq_id = ".$_GET['freq_id'];
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

//echo $sql;
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
					<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
				</h4>
				<hr>
				<div class='adminDiv text-right'>	
						<a href="form_freq.php?freq_id=<?=$_GET['freq_id'] ?>" class="btn btn btn-info adminDiv" >แก้ไข</a>
				</div>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
					<li><a href="contact.php"><span class="en">ติดต่อเรา</span><span class="th">ติดต่อเรา</span></a></li>
					<li class="active"><a href="freq.php"><span class="en">คำถามที่พบบ่อย</span><span class="th">คำถามที่พบบ่อย</span></a></li>
					
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

				<p class="updateBox">
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



