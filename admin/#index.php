<? include('header.php'); ?>

	<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		
		<?
			$sql = " select max(banner_id) as mbn from t_banner where active = 1";
	
			
			$result = mysql_query($sql, $conn);
			$row = mysql_fetch_array($result);
			$MaxB = $row['mbn'];
			//echo $MaxB;

			
		
			$sql = "select * from t_banner where active = 1 order by banner_id DESC ";
			$objQuery = mysql_query($sql);
				echo "<div class='carousel-inner'>";
					while ($row = mysql_fetch_array($objQuery)) {
						if($row['banner_id'] == $MaxB){
							echo "<div class='item active'>";
						}else{
							echo "<div class='item'>";
						}
						echo "  <img src='../".$row['images']."' class='fill'>
								<div class='carousel-caption text-left'>
									<a href='banner_detail.php?id=".$row['banner_id']."' >
									<h4><span class='th'>".$row['title']."</span>
										<span class='en'>".$row['title_en']."</span></h4>
									<div class='en'>
										".$row['content_en']."
										
									</div>
									<div class='th'>
										".$row['content']."
									
									</div>
									
									</a>";
									echo "<div  class='adminDiv'> ";
									echo "
											<a href='banner_list.php' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไขทั้งหมด</a>
											<a href='form_banner.php?ban_id=".$row['banner_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
											";
											if($row['active'] == 0){
												echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowB(".$row['banner_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
											}else{
												echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenB(".$row['banner_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
											}
																	
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelB(".$row['banner_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																
											";
									echo "</div>";
						echo"</div>
					</div>";
					
					}
			echo "</div>";
		
		?>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>











<!-- Page Content -->
    <div class="container">
		<!-- Gallery -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					ภาพกิจกรรม
					
					
                </h1>
				<p class="text-right">
					<a href="gallery_list.php" style="float: right;">
					<span class="en">ดูภาพกิจกรรมทั้งหมด</span>
					<span class="th">ดูภาพกิจกรรมทั้งหมด</span>
					</a>
				</p>
            </div>
           
                <div class="row">
					<?
					$sql = "select * from t_gallery where active = 1 
							order by gallery_id DESC limit 4 ";
					//echo $sql;
					$objQuery = mysql_query($sql);
						echo "<div class='carousel-inner'>";
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-3 img-portfolio'>
											<div  class='adminDiv text-right'>
											

												<a href='form_gallery.php?gallery_id=".$row['gallery_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
												";
												if($row['active'] == 0){
													echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowG(".$row['gallery_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
												}else{
													echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenG(".$row['gallery_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
												}
																		
													echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelG(".$row['gallery_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																	
												";
									echo "</div>
										<a href='gallery_detail.php?Id=".$row['gallery_id']."'>
											<img class='img-responsive img-hover' src='../".$row['images']."' alt=''>
										</a>
										<h5><span class='th'>".$row['title']."</span>
										   <span class='en'>".$row['title_en']."</span></h5>
									  </div>";
							}
					echo "</div>";
				
				?>
                   
            </div>
        <!-- /.row -->
		
		
		
		
		<!-- article -->
		<div class="row text-center">
			<?php
				$sql = "SELECT * FROM t_article_cat where active = 1 ORDER BY sort_order ASC";
				$objQuery = mysql_query($sql);
				//echo $sql;
					/*while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-2 col-sm-6 text-center'>
							<div class='article_box'>";
								
							echo "<a href='article_sub.php?Cat=".$row['cat_article_id']."'>";
							echo " <img src='../".$row['icon']."'>
										</h4><span class='th'>".$row['name']."</span>
										<span class='en'>".$row['name_en']."</span> 
										
									</h4>
								</a>
								<br clare='all'>
									<div class='adminDiv'>	
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-left'></i></a>
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-right'></i></a>
										<br clare='all'>
										<a href='form_article_cat.php?cat_article_id=".$row['cat_article_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenA(".$row['cat_article_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
									
									</div>
							</div>
						</div>";
				}*/

			?>
		</div>
		<!-- /.row -->
		
		
		<!-- Knowledge -->
		<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><span class="th">องค์ความรู้</span><span class="en">องค์ความรู้</span></h2>
            </div>
            <div class="col-lg-12">

                 <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab">วีดีโอสื่อการเรียนรู้</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab">คลังความรู้ด้านการเกษตร</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab">เตือนการระบาดศัตรูพืช</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab">การระบาดเพลี้ยแป้งมันสำปะหลัง</a>
                    </li>
					<li class=""><a href="#service-five" data-toggle="tab">การระบาดศัตรูข้าว</a>
                    </li>
					<li class=""><a href="#service-six" data-toggle="tab">การระบาดศัตรูมะพร้าว</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Service One</h4>
						<?php
							$sql = "SELECT * FROM t_vdo where active = 1
									ORDER BY vdo_id DESC
									LIMIT 8";
					
							$objQuery = mysql_query($sql);
							//echo $sql;
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-6 col-sm-6'>";
								echo "	<div class='vdo_box_2'>
										<div class='col-md-5 col-sm-5'>
											<iframe width='100%' height='150' src='".$row['url']."' frameborder='0' allowfullscreen></iframe>
										</div>
										<div class='col-md-7 col-sm-7'>";
										echo "<div  class='adminDiv text-right'> ";
												echo "
																		
													<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
													<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
													<a href='form_vdo.php?vdo_id=".$row['cat_vdo_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
													";
													if($row['active'] == 0){
														echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['vdo_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
													}else{
														echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['vdo_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
													}
																			
														echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['vdo_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																		
													";
										echo "</div>";
										echo "	<h5>
												<a href='vdo_detail.php?Id=".$row['vdo_id']."'>
													<span class='th'>".$row['title']."</span> 
													<span class='en'>".$row['title_en']."</span>
												</a>
											</h5>
											<p>".$row['update_date']."</p>
											<p><span class='en'>ที่มา :</span><span class='th'>ที่มา :</span>
											   <span>".$row['url']."</span>
											<p>";
								
											
								echo	"</div>
										</div>";		
										
								echo "</div>";
							}

						?>
						
                       
						<p class="text-right"><a href="vdo.php"><span class="en">อ่านเพิ่มเติม</span><span class="th">อ่านเพิ่มเติม</span></a></p>
					</div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Service Two</h4>
						
						<?php
							$sql = "SELECT
									k1.km_id,
									k1.cat_km_id,
									k1.images,
									k1.title_en,
									k1.title,
									k1.content_en,
									k1.content,
									DATE_FORMAT(k1.update_date,'%d/%m/%Y') as lastDate,
									k1.sort_order,
									k1.active,
									k2.`name`,
									k2.path,
									k2.type_file
									FROM
									t_km AS k1
									LEFT JOIN t_km_file AS k2 ON k2.km_id = k1.km_id
									WHERE
									k1.active = 1 AND
									k1.cat_km_id = 2
									group by k1.km_id
									ORDER BY k1.sort_order DESC
									LIMIT 10		";
					
							$objQuery = mysql_query($sql);
							//echo $sql;
								while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-6 col-sm-6'>";
								echo "	<div class='km_box_2'>
										<div class='col-md-5 col-sm-5'>
											<img src='../".$row['images']."' style='width: 100%;'>
										</div>
										<div class='col-md-7 col-sm-7'>
											<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
											<p>".$row['lastDate']."</p>
											<a href='km_detail.php?id=".$row['km_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
								";
								if($row['path'] == ""){
									echo "";
									
								}else{
									echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
										  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
								}
								echo "
									<br clare='all'>
									<div class='adminDiv'>	
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
										<a href='form_km.php?km_id=".$row['km_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenKM(".$row['km_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
										<a href='#' onclick='cmdDelKM(".$row['km_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
									</div>
								";
											
								echo	"</div>
										</div>";		
										
								echo "</div>";
							}

						?>
                       
						<p class="text-right"><a href="km_catergory.php"><span class="en">อ่านเพิ่มเติม</span><span class="th">อ่านเพิ่มเติม</span></a></p>
					
					</div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Service Three</h4>
                        <?php
							$sql = "SELECT
									k1.pest_id,
									k1.images,
									k1.title_en,
									k1.title,
									k1.content_en,
									k1.content,
									DATE_FORMAT(k1.update_date,'%d/%m/%Y') as lastDate,
									k1.sort_order,
									k1.active,
									k2.`name`,
									k2.path,
									k2.type_file
									FROM
									t_pest AS k1
									LEFT JOIN t_pest_file AS k2 ON k2.pest_id = k1.pest_id
									WHERE
									k1.active = 1 AND
									k1.parent_id = 1
									ORDER BY k1.sort_order DESC";
							$objQuery = mysql_query($sql);
							//echo $sql;
								while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-6 col-sm-6'>";
								echo "	<div class='km_box_2'>
										<div class='col-md-5 col-sm-5'>
											<img src='../".$row['images']."' style='width: 100%;'>
										</div>
										<div class='col-md-7 col-sm-7'>
											<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
											<p>".$row['lastDate']."</p>
											<a href='pest_detail.php?Id=".$row['pest_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
								";
								if($row['path'] == ""){
									echo "";
									
								}else{
									echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
										  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
								}
								echo "
									<br clare='all'>
									<div class='adminDiv'>	
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
										<a href='form_pest.php?pest_id=".$row['pest_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenP(".$row['pest_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
										<a href='#' onclick='cmdDelP(".$row['pest_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
									</div>
								";
											
								echo	"</div>
										</div>";		
										
								echo "</div>";
							}
							echo "<div class='col-lg-12 text-right'>
										<p><a href='pest_list.php?Id=1'><span class='th'>อ่านทั้งหมด >><span><span class='en'>Read more  >></span></a></p>
								</div>";
						?>
					</div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Service Four</h4>
                        <?php
							$sql = "SELECT
									k1.pest_id,
									k1.images,
									k1.title_en,
									k1.title,
									k1.content_en,
									k1.content,
									DATE_FORMAT(k1.update_date,'%d/%m/%Y') as lastDate,
									k1.sort_order,
									k1.active,
									k2.`name`,
									k2.path,
									k2.type_file
									FROM
									t_pest AS k1
									LEFT JOIN t_pest_file AS k2 ON k2.pest_id = k1.pest_id
									WHERE
									k1.active = 1 AND
									k1.parent_id = 2
									ORDER BY k1.sort_order DESC";
							$objQuery = mysql_query($sql);
							echo $sql;
								while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-6 col-sm-6'>";
								echo "	<div class='km_box_2'>
										<div class='col-md-5 col-sm-5'>
											<img src='../".$row['images']."' style='width: 100%;'>
										</div>
										<div class='col-md-7 col-sm-7'>
											<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
											<p>".$row['lastDate']."</p>
											<a href='pest_detail.php?Id=".$row['pest_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
								";
								if($row['path'] == ""){
									echo "";
									
								}else{
									echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
										  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
								}
								echo "
									<br clare='all'>
									<div class='adminDiv'>	
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
										<a href='form_pest.php?pest_id=".$row['pest_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenP(".$row['pest_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
										<a href='#' onclick='cmdDelP(".$row['pest_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
									</div>
								";
											
								echo	"</div>
										</div>";		
										
								echo "</div>";
							}
							echo "<div class='col-lg-12 text-right'>
										<p><a href='pest_list.php?Id=2'><span class='th'>อ่านทั้งหมด >><span><span class='en'>Read more  >></span></a></p>
								</div>";
						?>
					</div>
					<div class="tab-pane fade" id="service-five">
                        <h4>Service five</h4>
                        <?php
							$sql = "SELECT
									k1.pest_id,
									k1.images,
									k1.title_en,
									k1.title,
									k1.content_en,
									k1.content,
									DATE_FORMAT(k1.update_date,'%d/%m/%Y') as lastDate,
									k1.sort_order,
									k1.active,
									k2.`name`,
									k2.path,
									k2.type_file
									FROM
									t_pest AS k1
									LEFT JOIN t_pest_file AS k2 ON k2.pest_id = k1.pest_id
									WHERE
									k1.active = 1 AND
									k1.parent_id = 3
									ORDER BY k1.sort_order DESC";
							$objQuery = mysql_query($sql);
							//echo $sql;
								while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-6 col-sm-6'>";
								echo "	<div class='km_box_2'>
										<div class='col-md-5 col-sm-5'>
											<img src='../".$row['images']."' style='width: 100%;  height: 115px;
'>
										</div>
										<div class='col-md-7 col-sm-7'>
											<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
											<p>".$row['lastDate']."</p>
											<a href='pest_detail.php?Id=".$row['pest_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
								";
								if($row['path'] == ""){
									echo "";
									
								}else{
									echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
										  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
								}
								echo "
									<br clare='all'>
									<div class='adminDiv'>	
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
										<a href='form_pest.php?pest_id=".$row['pest_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenP(".$row['pest_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
										<a href='#' onclick='cmdDel(".$row['pest_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
									</div>
								";
											
								echo	"</div>
										</div>";		
										
								echo "</div>";
							}
							echo "<div class='col-lg-12 text-right'>
										<p><a href='pest_list.php?Id=3'><span class='th'>อ่านทั้งหมด >><span><span class='en'>Read more  >></span></a></p>
								</div>";
						?>
					</div>
					<div class="tab-pane fade" id="service-six">
                        <h4>Service six</h4>
                        <?php
							$sql = "SELECT
									k1.pest_id,
									k1.parent_id,
									k1.images,
									k1.title_en,
									k1.title,
									k1.content_en,
									k1.content,
									DATE_FORMAT(k1.update_date,'%d/%m/%Y') as lastDate,
									k1.sort_order,
									k1.active,
									k2.`name`,
									k2.path,
									k2.type_file
									FROM
									t_pest AS k1
									LEFT JOIN t_pest_file AS k2 ON k2.pest_id = k1.pest_id
									WHERE
									k1.active = 1 AND
									k1.parent_id = 4
									ORDER BY k1.sort_order DESC";
							$objQuery = mysql_query($sql);
							//echo $sql;
								while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-6 col-sm-6'>";
								echo "	<div class='km_box_2'>
										<div class='col-md-5 col-sm-5'>
											<img src='../".$row['images']."' style='width: 100%;'>
										</div>
										<div class='col-md-7 col-sm-7'>
											<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
											<p>".$row['lastDate']."</p>
											<a href='pest_detail.php?Id=".$row['pest_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
								";
								if($row['path'] == ""){
									echo "";
									
								}else{
									echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
										  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
								}
								echo "<div class='adminDiv'>	
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
										<a href='form_pest.php?pest_id=".$row['pest_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenP(".$row['pest_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
										<a href='#' onclick='cmdDel(".$row['pest_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
									</div>
								";
											
								echo	"</div>
										</div>";		
										
								echo "</div>";
							}
								echo "<div class='col-lg-12 text-right'>
										<p><a href='pest_list.php?Id=4'><span class='th'>อ่านทั้งหมด >><span><span class='en'>Read more  >></span></a></p>
								</div>";	
						?>
					</div>
                
   				</div>
            </div>
        </div>
		<!-- /.row -->
		
		
		
		<!-- News -->
		<div class="row">
			<div class="col-lg-12">
                <h2 class="page-header"><span class="th">ข่าวประชาสัมพันธ์</span><span class="en">ข่าวประชาสัมพันธ์</span></h2>
            </div>
			<div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
				
					<?php
						$sql = "SELECT * FROM t_news_cat
								WHERE active = 1
								ORDER BY sort_order ASC";
						$objQuery = mysql_query($sql);
						while ($row = mysql_fetch_array($objQuery)) {
							
							if($row['cat_news_id'] == 1){
								echo "<li class='active'>";
								
							}else{
								echo "<li class=''>";
							}
							echo "	
									<a href='#News-".$row['cat_news_id']."' data-toggle='tab'>
										<span class='en'>".$row['name_en']."</span>
										<span class='th'>".$row['name']."</span>
									</a>
									
									
								</li>
							";
						}
					?>
                </ul>

                <div id="myTabContent" class="tab-content">
				
					<?php
						$sql1 = "SELECT * FROM t_news_cat
								WHERE active = 1
								ORDER BY sort_order ASC";
								
						$objQuery1 = mysql_query($sql1);
						while ($row1 = mysql_fetch_array($objQuery1)) {
						
							
							if($row1['cat_news_id'] == 1){
								echo "<div class='tab-pane fade active in' id='News-".$row1['cat_news_id']."'>";
								
							}else{
								echo "<div class='tab-pane fade' id='News-".$row1['cat_news_id']."'>";
							}
							echo "<table class='table table-striped'>";
								
								$sql = "SELECT news_id, cat_news_id,title, title_en, DATE_FORMAT(update_date,'%d/%m/%Y') as update_date 
										FROM t_news
										WHERE cat_news_id = ".$row1['cat_news_id']." AND active = 1
										ORDER BY sort_order DESC
										limit 10 ";
					
									//echo $sql;	
									$data  = mysql_query($sql);
									
									while ($row = mysql_fetch_array($data)) {
										
										echo "<tr>";
											echo "<td style='width: 100px;'>";
												echo "<span>".$row['update_date']."</span>";
											echo "</td>";
											echo "<td class='text-left'>";
												echo "<a href='news_detail.php?id=".$row['news_id']."' ><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></a>";
											echo "</td>";
											echo "<td  class='text-right adminDiv' style='width:220px;'>";
												echo "
													
														<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
														<a href='#' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
														<a href='form_news.php?news_id=".$row['news_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
														<a href='#' onclick='cmdHiddenN(".$row['news_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
														<a href='#' onclick='cmdDelN(".$row['news_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
													
												";
											echo "</td>";
										echo "</tr>";
									}
									
									echo "</table>";
									echo "<div class='col-lg-12 text-right'>
											<p><a href='news_list.php'><span class='th'>อ่านทั้งหมด >><span><span class='en'>Read more  >></span></a></p>
										  </div>";
							echo "</div>"; //จบ div tab
						}
					?>
				
                    
				</div>
				</div>
            </div>
		</div>
		<!-- /.row -->
		
		
		
		<!-- Calendar -->
		<div class="row">
			<div class="col-lg-12">
                <h2 class="page-header"><span class="th">ปฏิทินกิจกรรม</span><span class="en">Calendar</span></h2>
            </div>
			<div class="col-md-4">
			<input type="hidden" id="event_id" name="event_id" />
			<script>
            $(document).ready(function () {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var h = {};

                $('#eventEdit').hide();
                $('#calendar').fullCalendar({
                  draggable: true,
                  editable: true,
                  selectable: true,
                  selectHelper: true,
                  header: {
                          left: 'prev,next today',
                          center: 'title',
                          right: 'month,agendaWeek,agendaDay'
                  },
                  /*views: {
                  		listMonth :{
                  			buttonText: 'list Month'
                  		}
                  },*/
                  columnFormat: {
                          month: 'dddd'
                  },
                    events: "./data_events.php",
                  
                    // Convert the allDay from string to boolean
                    eventRender: function (event, element) {
                    	  element.find(".fc-title").remove();
                          element.find(".fc-time").remove();
                          var new_description = ''
                                  + moment(event.start).format("HH:mm") + '-' + moment(event.end).format("HH:mm") + '<br/>'
                                  + '<strong>title : </strong>' + event.title + '<br/>'
                                  ;

                          element.append(new_description);
                      
                          
                  },
                  select: function (start, end, allDay) {
                        
                  		var modal = document.getElementById('eventAdd');
                  		var span = document.getElementsByClassName("close")[0];
                  		modal.style.display = "block";
                  		
                  		span.onclick = function() {
    					modal.style.display = "none";
						}

						window.onclick = function(event) {
   						if (event.target == modal) {
        				modal.style.display = "none";
    					}
						}
                  },
                  eventDrop: function (event, delta, revertFunc) {
                  		var dropedDate = event.start.format("YYYY-MM-DD");
                  		var today = $('#calendar').fullCalendar('getDate');
                        var today_newformat = today.format("YYYY-MM-DD");

                        var timestart = event.start.format("H:mm:ss");
                        var timeend = event.end.format("H:mm:ss");
                        //alert(timeend);
                        //print('date: '+dropedDate +'time:'+timestart+'<>'+timeend);
                          if (event.forceAllDay && !allDay) {
                                  revertFunc();
                          } else {
                                  
                                  			var params = "n=" + Math.random();
											params = params + "&" + $('#calendar').serialize();
                                          $.ajax({
                                                  type: "POST",
                                                  url: 'function/drang_drop.php',
                                                  cache: false,
                                                  async: false,
                                                  data: ({
                                                          id: event.event_id,
                                                          start: dropedDate+' '+timestart,
                                                          end: dropedDate+' '+timeend
                                                          
                                                  }),
                                                  beforeSend: function () {

                                                  },
                                                  success: function (sxAjax) {
                                                        if (sxAjax.substr(0,9) == "Completed") {
														alert('แก้ไขเรียบร้อยแล้ว')
														location.reload();
														} else {
														alert(sxAjax);
													}	
                                                  },
                                                  error: function () {
                                                        revertFunc();
                                                  }
                                          })
                                  
                          }
                  },
                  eventClick: function (event, jsEvent, view) {
                  		$('#event_id').val(event.event_id);
                  		$('#title').val(event.title);
                  		$('#startDate').val(event.start.format('YYYY-MM-DD H:mm:ss'));
                  		$('#endDate').val(event.end.format('YYYY-MM-DD H:mm:ss'));

                  		var modal = document.getElementById('eventEdit');
                  		var span = document.getElementsByClassName("close")[0];
                  		modal.style.display = "block";
                  		
                  		span.onclick = function() {
    					modal.style.display = "none";
						}

						window.onclick = function(event) {
   						if (event.target == modal) {
        				modal.style.display = "none";
    					}
						}
                  },
                  loading: function (bool) {
                          if (bool)
                                  $('#loading').show();
                          else
                                  $('#loading').hide();
                  }
          });
        })
</script>

<script language="javascript">
	$(function(){
	$("#month").datetimepicker({
		dateFormat: 'yy-mm',
		numberOfMonths: 1,
	});
	$("#startDate").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#startDate_add").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate_add").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
		
});

</script>
				<div id='wrap'>
					<div id='calendar'></div>
					<div style='clear:both'></div>
				</div>
			</div>
			<div class="col-md-8"></div>
		</div>
		
		<!-- /.row -->
		
		
		<!-- ยุวชนเกษตรดีเด่น -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					เกษตรกรดีเด่น 
                </h1>
				<p class="text-right">
					<a href="people.php" style="float: right;">
					<span class="en">ดูทั้งหมด</span>
					<span class="th">ดูทั้งหมด</span>
					</a>
				</p>
            </div>
           
                <div class="row">
					<?
					$sql = "select * from t_people where active = 1 
							order by people_id DESC limit 4 ";
					//echo $sql;
					$objQuery = mysql_query($sql);
						echo "<div class='carousel-inner'>";
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-3 img-portfolio'>
											<div  class='adminDiv text-right'>
											

												<a href='form_people.php?people_id=".$row['people_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
												";
												if($row['active'] == 0){
													echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowPP(".$row['people_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
												}else{
													echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenPP(".$row['people_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
												}
																		
													echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelPP(".$row['people_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																	
												";
									echo "</div>
										<div class='text-center'>
										<a href='people_detail.php?Id=".$row['people_id']."'>
											<img class='img-responsive img-hover' src='../".$row['images']."' alt='' style='height: 275px;width: 100%'>
										</a>
										<h5><span class='th'>".$row['title']."</span>
										   <span class='en'>".$row['title_en']."</span></h5>
										</div>
									  </div>";
							}
					echo "</div>";
				
				?>
			</div>		
        </div>
        <!-- /.row -->
		
		
		
		<!-- สินค้าวิสาหกิจชุมชน -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					สินค้าวิสาหกิจชุมชน 
					
					
                </h1>
				<p class="text-right">
					<a href="product.php" style="float: right;">
					<span class="en">ดูทั้งหมด</span>
					<span class="th">ดูทั้งหมด</span>
					</a>
				</p>
            </div>
           
                <div class="row">
					<?
					$sql = "select * from t_product where active = 1 
							order by product_id DESC limit 12 ";
					//echo $sql;
					$objQuery = mysql_query($sql);
						echo "<div class='carousel-inner'>";
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-2 img-portfolio'>
											<div  class='adminDiv text-right'>
											

												<a href='form_people.php?people_id=".$row['product_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
												";
												if($row['active'] == 0){
													echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowPR(".$row['product_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
												}else{
													echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenPR(".$row['product_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
												}
																		
													echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelPR(".$row['product_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																	
												";
									echo "</div>
										<div class='text-center'>
										<a href='people_detail.php?Id=".$row['product_id']."'>
											<img class='img-responsive img-hover' src='../".$row['images']."' alt='' style='height: 150px;width: 100%'>
										</a>
										<h5><span class='th'>".$row['title']."</span>
										   <span class='en'>".$row['title_en']."</span></h5>
										</div>
									  </div>";
							}
					echo "</div>";
				
				?>
			</div>		
        </div>
        <!-- /.row -->
		
		<!-- service -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					ลิ้งที่น่าสนใจ 
					
					
                </h1>
				<p class="text-right">
					<a href="service.php" style="float: right;">
					<span class="en">ดูลิ้งที่น่าสนใจเพิ่มเติม</span>
					<span class="th">ดูลิ้งที่น่าสนใจเพิ่มเติม</span>
					</a>
				</p>
            </div>
           
            <div class="row">
				<?
					$sql1 = "SELECT * FROM t_service_file where active = 1 order by file_id limit 6 ";			
					$objQuery1 = mysql_query($sql1);
		
				
									while ($row1 = mysql_fetch_array($objQuery1)) {
										echo "<div class='col-md-2 col-sm-3'>";
										echo "	<div class='sevice_box_2'>
												<a href='".$row1['url']."' title='".$row1['title']."' target='_blank'>
												<img src='".$row1['path']."' style='width: 100%;' >
												</a>";
										echo "
											<br clare='all'>
											<br clare='all'>";
										echo "<div class='adminDiv'>
												<a href='form_service_file.php?service_id=".$row1['file_id']."' class='btn btn-info btn-xs ' ><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
												if($row1['active'] == 0){
														echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowFF(".$row1['file_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
													}else{
														echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenFF(".$row1['file_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
													}
												
										 echo "  
												 <a href='#' onclick='cmdDelFF(".$row1['file_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
											</div>";
													
										echo	"</div>";
									echo "</div>";
								}
					?>
				
			</div>
		</div>
			
		
		
		
	</div><!-- End Page Content -->

	
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 	
<script type="text/javascript">
function cmdHiddenKM(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_km.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdDelKM(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_km.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}




function cmdHiddenP(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_pest.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDelP(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_pest.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}



function cmdHiddenA(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_cat_article.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdHiddenN(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_news.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	

}
function cmdDelN(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_news.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}



function cmdHiddenB(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_banner.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShowB(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_banner.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDelB(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_banner.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
////////////////////// Gallery

function cmdHiddenG(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_gallery.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShowG(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_gallery.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDelG(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_gallery.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdHiddenPP(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_people.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShowPP(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_people.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDelPP(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_people.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}



function cmdHiddenFF(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_service.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShowFF(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_service.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDelFF(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_service.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdHiddenPR(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_product.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกซ่อนเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdShowPR(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_product.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ถูกแสดงผลเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}


function cmdDelPR(ID){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_product.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('ลบเรียบร้อยแล้ว')
                location.reload();

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

</script>

<link href='css/fullcalendar.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
        <script src='js/fullcalendar-2.1.1/lib/moment.min.js'></script>
        <script type="text/javascript" src='js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
        <script src='js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js'></script>
        <script src='js/fullcalendar-2.1.1/fullcalendar.js'></script>
        <script src='js/fullcalendar-2.1.1/lang/en-au.js'></script>

        <script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
        <script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
        <script>
            $(document).ready(function () {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var h = {};

                $('#eventEdit').hide();
                $('#calendar').fullCalendar({
                  draggable: true,
                  editable: true,
                  selectable: true,
                  selectHelper: true,
                  header: {
                          left: 'prev,next today',
                          center: 'title',
                          right: 'month,agendaWeek,agendaDay'
                  },
                  /*views: {
                  		listMonth :{
                  			buttonText: 'list Month'
                  		}
                  },*/
                  columnFormat: {
                          month: 'dddd'
                  },
                    events: "./data_events.php",
                  
                    // Convert the allDay from string to boolean
                    eventRender: function (event, element) {
                    	  element.find(".fc-title").remove();
                          element.find(".fc-time").remove();
                          var new_description = ''
                                  + moment(event.start).format("HH:mm") + '-' + moment(event.end).format("HH:mm") + '<br/>'
                                  + '<strong>title : </strong>' + event.title + '<br/>'
                                  ;

                          element.append(new_description);
                      
                          
                  },
                  select: function (start, end, allDay) {
                        
                  		var modal = document.getElementById('eventAdd');
                  		var span = document.getElementsByClassName("close")[0];
                  		modal.style.display = "block";
                  		
                  		span.onclick = function() {
    					modal.style.display = "none";
						}

						window.onclick = function(event) {
   						if (event.target == modal) {
        				modal.style.display = "none";
    					}
						}
                  },
                  eventDrop: function (event, delta, revertFunc) {
                  		var dropedDate = event.start.format("YYYY-MM-DD");
                  		var today = $('#calendar').fullCalendar('getDate');
                        var today_newformat = today.format("YYYY-MM-DD");

                        var timestart = event.start.format("H:mm:ss");
                        var timeend = event.end.format("H:mm:ss");
                        //alert(timeend);
                        //print('date: '+dropedDate +'time:'+timestart+'<>'+timeend);
                          if (event.forceAllDay && !allDay) {
                                  revertFunc();
                          } else {
                                  
                                  			var params = "n=" + Math.random();
											params = params + "&" + $('#calendar').serialize();
                                          $.ajax({
                                                  type: "POST",
                                                  url: 'function/drang_drop.php',
                                                  cache: false,
                                                  async: false,
                                                  data: ({
                                                          id: event.event_id,
                                                          start: dropedDate+' '+timestart,
                                                          end: dropedDate+' '+timeend
                                                          
                                                  }),
                                                  beforeSend: function () {

                                                  },
                                                  success: function (sxAjax) {
                                                        if (sxAjax.substr(0,9) == "Completed") {
														alert('แก้ไขเรียบร้อยแล้ว')
														location.reload();
														} else {
														alert(sxAjax);
													}	
                                                  },
                                                  error: function () {
                                                        revertFunc();
                                                  }
                                          })
                                  
                          }
                  },
                  eventClick: function (event, jsEvent, view) {
                  		$('#event_id').val(event.event_id);
                  		$('#title').val(event.title);
                  		$('#startDate').val(event.start.format('YYYY-MM-DD H:mm:ss'));
                  		$('#endDate').val(event.end.format('YYYY-MM-DD H:mm:ss'));

                  		var modal = document.getElementById('eventEdit');
                  		var span = document.getElementsByClassName("close")[0];
                  		modal.style.display = "block";
                  		
                  		span.onclick = function() {
    					modal.style.display = "none";
						}

						window.onclick = function(event) {
   						if (event.target == modal) {
        				modal.style.display = "none";
    					}
						}
                  },
                  loading: function (bool) {
                          if (bool)
                                  $('#loading').show();
                          else
                                  $('#loading').hide();
                  }
          });
        })
</script>

<script language="javascript">
	$(function(){
	$("#month").datetimepicker({
		dateFormat: 'yy-mm',
		numberOfMonths: 1,
	});
	$("#startDate").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#startDate_add").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate_add").datetimepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
		
});

</script>

<script language="javascript">

function cmdsave(){
	var modal = document.getElementById('eventAdd');
	var params = "n=" + Math.random();
	params = params + "&" + $('#form1').serialize();
	//alert($('#frmQ').serialize());
	
	$.ajax({
		type: "POST",
		url: "function/add_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				//location.reload();
				alert('บันทึกเรียบร้อยแล้ว');
				modal.style.display = "none";
				location.reload();	
					
			} else {

				alert(sxAjax);
			}	
		}
	});	
	
	//document.getElementById('button').disabled = true;
}

function cmdedit(){
	var modal = document.getElementById('eventEdit');
	var params = "n=" + Math.random();
	params = params + "&" + $('#form1').serialize();
	//alert($('#frmQ').serialize());
	
	$.ajax({
		type: "POST",
		url: "function/edit_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				//location.reload();
				alert('แก้ไขเรียบร้อยแล้ว');
				modal.style.display = "none";		
				location.reload();	
					
			} else {

				alert(sxAjax);
			}	
		}
	});	
	
	//document.getElementById('button').disabled = true;
}

function cmddelete(){
	var modal = document.getElementById('eventEdit');
	var params = "n=" + Math.random();
	params = params + "&" + $('#form1').serialize();
	//alert($('#frmQ').serialize());
	
	$.ajax({
		type: "POST",
		url: "function/delete_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				//location.reload();
				alert('ลบเรียบร้อยแล้ว');
				modal.style.display = "none";		
				location.reload();	
					
			} else {

				alert(sxAjax);
			}	
		}
	});	
	
	//document.getElementById('button').disabled = true;
}


</script>

    

<? include('footer.php'); ?>


