<?php include('header.php'); 
$sql = "SELECT
		t_news.news_id,
		t_news_cat.name_en,
		t_news_cat.`name`,
		t_news.title_en,
		t_news.title,
		t_news.content_en,
		t_news.content,
		t_news.update_date
		FROM
		t_news
		INNER JOIN t_news_cat ON t_news_cat.cat_news_id = t_news.cat_news_id
		WHERE
		t_news.news_id = ".$_GET['id']." AND
		t_news.active = 1";
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3><span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span></h3>
				
				<br>
				<br>
				<hr>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="active"><a href="news_list.php"><span class="en"><?=$row['name_en'] ?></span><span class="th"><?=$row['name'] ?></span></a></li>
					
					
                </ol>
				<div class='adminDiv text-right'>	
						<a href="form_news.php?news_id=<?=$_GET['id'] ?>" class="btn btn btn-info adminDiv" >แก้ไข</a>
				</div>
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
				<p class="downloadBox">
				
					<? 
					$sql1 = "SELECT * FROM t_news_file where active = 1 AND news_id = ".$_GET['id'];
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



