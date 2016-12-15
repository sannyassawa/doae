<?php include('header.php'); 
$sql = "SELECT * FROM t_vdo where vdo_id = ".$_GET['Id'];
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
                
					<li class="active"><a href="vdo_list.php"><span class="en">VDO</span><span class="th">สื่อมัลติมิเดีย</span></a></li>
					
                </ol>
            </div>
        </div>
		
	
		<div class="row"> 
			<div class="col-lg-12">
			</div>
			<div class="col-lg-12">
				
				<iframe width='100%' height='400' src='<?=$row['url'] ?>' frameborder='0' allowfullscreen></iframe>
				
				<div id="content" class="en">
					<?=$row['content_en'] ?>
				</div>
				<div id="content" class="th">
					<?=$row['content'] ?>
				</div>
				<p class="downloadBox">
				
					<? 
					$sql1 = "SELECT * FROM t_km_file where active = 1 AND km_id = ".$_GET['id'];
					//echo $sql1;
					$objQuery1 = mysql_query($sql1);
					while ($row1 = mysql_fetch_array($objQuery1)) {
							echo "<p>
									<span class='en'><a href='".$row1['path']."' >Download</a></span>
									<span class='th'><a href='".$row1['path']."' >ดาวน์โหลดเอกสาร</a></span>
								</p>";
					}
					?>
				</p>
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



