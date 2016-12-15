<?php include('header.php'); 
$sql = "SELECT
									t_qa.qa_id,
									t_qa.`name`,
									t_qa.phone,
									t_qa.email,
									t_qa.cus_type,
									t_qa.con_type,
									t_qa.title,
									t_qa.content,
									t_qa.create_date as qcreate_date,
									t_qa.update_id,
									t_qa.update_date,
									t_qa.responsi,
									t_qa.`status`,
									t_qa.active,
									`user`.fname,
									`user`.lname,
									t_comment.com_id,
									t_comment.`comment`,
									t_comment.update_date as cupdate_date,
									t_status.name as sname
									FROM
									t_qa
									LEFT JOIN t_comment ON t_qa.qa_id = t_comment.qa_id
									LEFT JOIN `user` ON `user`.user_id = t_comment.create_id AND `user`.user_id = t_comment.update_id
									LEFT JOIN t_status ON t_qa.`status` = t_status.status_id
									WHERE t_qa.qa_id = ".$_GET['qa_id'];
			
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
				<div class="panel panel-default">
                        <div class="panel-heading text-right">
                            
							<input type="button" class="btn btn-danger" onclick="cmdCancel()" value="ย้อนกลับ">
							<input type="hidden" name="delID" id="delID" value="0"> 
                        </div>
						<div class="panel-body">
							<div class="qa_box">
								<table>
									<tr>
										<td style="text-align: right;"> <b>หัวข้อคำถาม : </b> </td>
										<td><?=$row['title'] ?></td>
									</tr>
									<tr>
										<td style="text-align: right;"> <b>เนื้อหา :  </b> </td>
										<td><?=$row['content'] ?></td>
									</tr>
									<tr>
										<td style="text-align: right;"></td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="panel-footer">
							<p><b>ถามโดย :  </b><?=$row['name'] ?> <b> วันที่ตั้งคำถาม :  </b><?=$row['qcreate_date'] ?> <b> เบอร์โทรศัพท์ :  </b><?=$row['phone'] ?>   <b>อีเมล์ :  </b><?=$row['email'] ?> </p>
							<p><b>สถานะ :  </b><?=$row['sname'] ?></p>
						</div>
				</div>
			
				<? $sql = " SELECT
							t_comment.com_id,
							t_comment.qa_id,
							t_comment.`comment`,
							t_comment.create_id,
							t_comment.create_date,
							t_comment.update_id,
							t_comment.update_date,
							`user`.fname,
							`user`.lname
							FROM
							t_comment
							LEFT JOIN `user` ON `user`.user_id = t_comment.update_id 
							WHERE t_comment.qa_id = ".$_GET['qa_id'];
						
							$objQuery = mysql_query($sql);
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='panel panel-default'>
											<div class='panel-body'>
												<div class='comment_box_box'>
													".$row['comment']."
												</div>
											</div>
											<div class='panel-footer'>
												<p><b>ตอบโดย :  </b>".$row['fname']." ".$row['lname']." <b> วันที่ตอบคำถาม  :  </b>".$row['update_date']."  </p>
											</div>
									</div>";
							
							}
						?>

			</div>
				
				
				
				
				
				
				<p>
			
				<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
				//echo $url ?>
							
				<div class="fb-share-button" data-href="<?=$url ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$url ?>&amp;src=sdkpreparse">แชร์</a></div>
  				
				</p>
			</div>
			
        </div>
	
</div>

<script type="text/javascript">

function cmdCancel(){
	document.location.href="qa.php" ;
}
</script>
<? include('footer.php'); ?>



