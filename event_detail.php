<?php include('header.php'); 
$sql = "SELECT * FROM t_event where active = 1 AND event_id = ".$_GET['id'];
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

//echo $sql;
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="event.php">เกี่ยวกับหน่วยงาน</a></span>
						<span class="th"><a href="event.php">เกี่ยวกับหน่วยงาน</a></span>
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
				
				<p class="updateBox">
					<span class="en">Update Date : </span><span class="th">บันทึกเมื่อ : </span>
					<?php
						$date_new=date_create($date);
						echo date_format($date_new,"d/m/Y");
				     ?>
				</p>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



