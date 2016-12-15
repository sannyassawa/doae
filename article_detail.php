<?php include('header.php'); 
$sql = "SELECT * FROM t_article where active = 1 AND article_id = ".$_GET['Id'];
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);
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
                <h1 class="page-header">
					<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
				</h1>
				
                <ol class="breadcrumb">
                   <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="article.php">บทความการเกษตร</a></span>
						<span class="th"><a href="article.php">บทความการเกษตร</a></span>
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
				<p class="downloadBox">
				
					<? 
					$sql1 = "SELECT * FROM t_article_file where active = 1 AND article_id = ".$_GET['Id'];
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

				<p>
			
				<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
				//echo $url ?>
							
				<div class="fb-share-button" data-href="<?=$url ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$url ?>&amp;src=sdkpreparse">แชร์</a></div>
  				
				</p>

			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



