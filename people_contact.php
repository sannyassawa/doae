<?php include('header.php'); 
$sql = "SELECT * FROM t_contact where active = 1 AND contact_Id = ".$_GET['Id'];
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);
$date = $row['update_date'];
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span></h1>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li><a href="contact.php">ยุวชนเกษตรดีเด่น</a></li>
					
                </ol>
			</div>
        </div>
		
	
		<div class="row">
			<div class="col-lg-12">
				<div Id="content" class="en">
					<?=$row['content_en'] ?>
				</div>
				<div Id="content" class="th">
					<?=$row['content'] ?>
				</div>
				<p class="downloadBox">
				
					<? 
					$sql1 = "SELECT * FROM t_contact_file where active = 1 AND contact_Id = ".$_GET['Id'];
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
				
						<?php
						$date_new=date_create($date);
						echo date_format($date_new,"d/m/Y");
						?>
				</p>
				<p>
			
				<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
				//echo $url ?>
							
				<a href="http://www.facebook.com/sharer.php?u=<?=$url ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><img src="img/facebook_share.gif"></a>  			

  				
				</p>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



