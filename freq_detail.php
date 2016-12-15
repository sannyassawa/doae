<?php include('header.php'); 
$sql = "SELECT * FROM t_freq where active = 1 AND freq_id = ".$_GET['freq_id'];
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);
$date = $row['update_date'];
//echo $sql;
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.8&appId=300369290359326";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
					<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
				</h4>
				<hr>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
					<li><a href="contact.php"><span class="en">ติดต่อเรา</span><span class="th">ติดต่อเรา</span></a></li>
					<li class="active"><span class="en">คำถามที่พบบ่อย</span><span class="th">คำถามที่พบบ่อย</span></li>
					
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
				<p>
			
				<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
				//echo $url ?>
							
				<div class="fb-share-button" data-href="<?=$url ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$url ?>&amp;src=sdkpreparse">แชร์</a></div>
  				
				</p>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



