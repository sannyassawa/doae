<?php
include('header.php');

?>
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
									
									<h4><span class='th'>".$row['title']."</span>
										<span class='en'>".$row['title_en']."</span></h4>
									<div class='en'>
										".$row['content_en']."
										<a class='btnreadmore' href='banner_detail.php?id=".$row['banner_id']."' >อ่านต่อ</a>
									</div>
									<div class='th'>
										".$row['content']."
										<a class='btnreadmore' href='banner_detail.php?id=".$row['banner_id']."' >อ่านต่อ</a>
									</div>
									
									";
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
        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>-->
    </header>

    <!-- Page Content -->
    <div class="container">
		<!-- Gallery -->
        <div class="row">
				<h2 class="page-header"><span class="th">ภาพกิจกรรม</span><span class="en">ภาพกิจกรรม</span></h2>
				<hr>
				<p class="text-right">
					<a href="gallery_list.php" style="float: right;margin-top: -52px;">
					<span class="en">ดูภาพกิจกรรมทั้งหมด</span>
					<span class="th">ดูภาพกิจกรรมทั้งหมด</span>
					</a>
				</p>
				
                <div class="row">
					<?
					$sql = "select * from t_gallery where active = 1 and flag_index =1
							order by sort_order DESC limit 6 ";
					//echo $sql;
					$objQuery = mysql_query($sql);
						echo "<div class='carousel-inner'>";
						$i=1;
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-2 img-portfolio'>
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
                              echo "<center>";  if($i==1){

                                }
                                else{

                                    echo "<a href='#' onclick='bannerleft(".$row['sort_order'].")' class='btn btn-default btn-xs'><i class='fa fa-arrow-left'></i></a>";}
                                if($i==mysql_num_rows($objQuery)){

                                }else{
                                    echo "<a href='#' onclick='bannerright(".$row['sort_order'].")' class='btn btn-default btn-xs'><i class='fa fa-arrow-right'></i></a>";
                                }
                                echo "</center>";
									echo "</div>
										<a href='gallery_detail.php?Id=".$row['gallery_id']."'>
											<img class='img-responsive img-hover' src='../".$row['images']."' alt=''>
										</a>
										<h5><span class='th'>".$row['title']."</span>
										   <span class='en'>".$row['title_en']."</span></h5>
									  </div>";
                                $i++;
							}
					echo "</div>";
				
				?>
                   
            </div>
			<!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        <!-- /.row -->

		<!-- article -->
		<div class="row text-center">
			<?php
				$sql = "SELECT * FROM t_article_cat where active = 1 ORDER BY sort_order ASC";
				$objQuery = mysql_query($sql);
				//echo $sql;
            $content = array();
            $i=1;

					while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-2 col-sm-6 text-center'>
							<div class='article_box_index'>";

							echo "<a href='article_sub.php?Cat=".$row['cat_article_id']."'>";
							echo " <img src='../".$row['icon']."'>
										</h4><span class='th' style='height: 60px;'>".$row['name']."</span>
										<span class='en' style='height: 60px;'>".$row['name_en']."</span> 
										
									</h4>
								</a>
								<br clare='all'>
									<div class='adminDiv'>";
                                    if($i==1){

                                    }
                                    else{

                        echo "<a href='#' onclick='left(".$row['sort_order'].")' class='btn btn-default btn-xs'><i class='fa fa-arrow-left'></i></a>";}
                        if($i==mysql_num_rows($objQuery)){

                        }else{ 
							echo "<a href='#' onclick='right(".$row['sort_order'].")' class='btn btn-default btn-xs'><i class='fa fa-arrow-right'></i></a>";
						}
								echo"	<br clare='all'>
										<a href='form_article_cat.php?cat_article_id=".$row['cat_article_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
										<a href='#' onclick='cmdHiddenA(".$row['cat_article_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
									
									</div>
							</div>
						</div>";

                        $i++;
				}



			?>
		</div>

		<!-- /.row -->

		<!-- Knowledge2 -->
		<div class="row" style='margin-top: 100px;'>
		<div class="col-lg-12">

                 <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab">วีดีโอสื่อการเรียนรู้</a>
                    </li>
                    <?php
						$sql = "SELECT * FROM t_km_cat
								WHERE active = 1 and flag_index = 1
								ORDER BY sort_order ASC
								limit 5";
						$objQuery = mysql_query($sql);
						while ($row = mysql_fetch_array($objQuery)) {
					
							echo "<li class=''>";
						
							echo "	
									<a href='#service-".$row['cat_km_id']."' data-toggle='tab'>
										<span class='en'>".$row['name_en']."</span>
										<span class='th'>".$row['name']."</span>
									</a>
									
									
								</li>
							";
						}
					?>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
						<?php
							$sql = "SELECT * FROM t_vdo where active = 1 and flag_index = 1
									ORDER BY sort_order ASC
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
													echo "<a href='#' onclick='upVdo(".$row['sort_order'].")' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>";
													echo "<a href='#' onclick='downVdo(".$row['sort_order'].")' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>";
													
													
													echo "
														<a href='form_vdo.php?vdo_id=".$row['vdo_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShowV(".$row['vdo_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHiddenV(".$row['vdo_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
																				
															echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelV(".$row['vdo_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																			
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
					<?php
						$sql = "SELECT * FROM t_km_cat
								WHERE active = 1 and flag_index = 1
								ORDER BY sort_order ASC
								limit 5";
						$objQuery = mysql_query($sql);
						while ($row = mysql_fetch_array($objQuery)) {
							
						
								echo "<div class='tab-pane fade' id='service-".$row['cat_km_id']."'>";
										$sql1 = "SELECT
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
													k1.flag_index,
													k2.`name`,
													k2.path,
													k2.type_file
													FROM
													t_km AS k1
													LEFT JOIN t_km_file AS k2 ON k2.km_id = k1.km_id
													WHERE
													k1.active = 1 AND k1.flag_index = 1 and
													k1.cat_km_id = ".$row['cat_km_id']."
													group by k1.km_id
													ORDER BY k1.sort_order DESC
													LIMIT 10";
						
										$objQuery1 = mysql_query($sql1);
										//echo $sql;
										while ($row1 = mysql_fetch_array($objQuery1)) {
					
										echo "<div class='col-md-6 col-sm-6'>";
										echo "	<div class='km_box_2'>
												<div class='col-md-5 col-sm-5'>
													<img src='../".$row1['images']."' style='width: 100%;'>
												</div>
												<div class='col-md-7 col-sm-7'>
													<h4><span class='th'>".$row1['title']."</span> <span class='en'>".$row1['title_en']."</span></h4>
													<p>".$row1['lastDate']."</p>
													<a href='km_detail.php?id=".$row1['km_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
										";
										if($row['path'] == ""){
											echo "";
											
										}else{
											echo "<span class='en'><a href='../".$row1['path']."'>Download</a></span>
												  <span class='th'><a href='../".$row1['path']."' >ดาวน์โหลดเอกสาร</a></span>";
										}
										
										echo "
											<br clare='all'>
											<div class='adminDiv'>	
												<a href='form_km.php?km_id=".$row1['km_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
												<a href='#' onclick='cmdHiddenKM(".$row1['km_id'].")' class='btn btn-warning btn-xs'><i class='fa fa-minus-square-o'></i> ซ่อน</a>
												<a href='#' onclick='cmdDelKM(".$row1['km_id'].")' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> ลบ</a>
											</div>
										";
										
													
										echo	"</div>
												</div>";		
												
										echo "</div>";
								
									}
								
								echo "</div>";
						}
					?>
					
		
   				</div>
            </div>
       
		
		</div>
		<!-- /.row -->
		
		<!-- News -->
		<div class="row" style='margin-top: 100px;'>
			<div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
				
					<?php
						$sql = "SELECT * FROM t_news_cat
								WHERE active = 1 and flag_index = 1
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
								WHERE active = 1 and flag_index = 1
								ORDER BY sort_order ASC";
								
						$objQuery1 = mysql_query($sql1);
						while ($row1 = mysql_fetch_array($objQuery1)) {
						
							
							if($row1['cat_news_id'] == 1){
								echo "<div class='tab-pane fade active in' id='News-".$row1['cat_news_id']."'>";
								
							}else{
								echo "<div class='tab-pane fade' id='News-".$row1['cat_news_id']."'>";
							}
							echo "<table class='table table-striped'>";
								
								$sql = "SELECT news_id, cat_news_id,title, title_en,flag_index, DATE_FORMAT(update_date,'%d/%m/%Y') as update_date ,sort_order
										FROM t_news
										WHERE cat_news_id = ".$row1['cat_news_id']." AND active = 1 and flag_index = 1
										ORDER BY sort_order ASC
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
											echo "<td  class='text-right adminDiv' style='width:235px;'>";
												echo "
													
														<a href='#' class='btn btn-default btn-xs' onclick='upNews(".$row['sort_order'].")'><i class='fa fa-arrow-up'></i></a>
														<a href='#' class='btn btn-default btn-xs' onclick='downNews(".$row['sort_order'].")'><i class='fa fa-arrow-down'></i></a>
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
			
                <h2 class="page-header"><span class="th">ปฏิทินกิจกรรม</span><span class="en">Calendar</span></h2>
				<hr class='border' />
				<p class="text-right">
					<a href="calendar.php" style="float: right;margin-top: -50px;">
					<span class="en">อ่านเพิ่มเติม</span>
					<span class="th">อ่านเพิ่มเติม</span>
					</a>
				</p>
			<div class="col-lg-7">
				<div id='wrap'>
					<div id='calendar'></div>
					<div style='clear:both'></div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="boxlistCar">
					<div class='adminDiv text-right'>	
						<button type="button" class="btn btn-success adminDiv" onclick="cmdNewCar()">เพิ่ม</button>
					</div>
					<form name="frmSearch" id="frmSearch"   method="get" action="<?php $_SERVER['SCRIPT_NAME'] ?> ">
					<input type="text" id="startDate" name="startDate" value="" placeholder="วันที่เริ่มต้น" />
					<input type="text" id="endDate" name="endDate" value="" placeholder="วันที่สิ้นสุด" />
					<input type="submit" value="ค้นหา"  />
					<?  $startDate = $_REQUEST["startDate"];
						$endDate = $_REQUEST["endDate"];
					?>
					</form>
					<?
						$datemm = date("Y-m");
						//echo $datemm;
					
						$sql = " select event_id,title,title_en, DATE_FORMAT(`start`,'%d/%m/%Y') as `start` from t_event";
								 if($startDate == ""){
									 
								 }else {
									 $sql .= " where `start` BETWEEN '".$startDate." 00:00:00' and '".$endDate." 23:59:59'";
								 }
							
							//echo $sql;
								$objQuery = mysql_query($sql);
								echo "<table style='width: 100%;'>";
								
									while ($row = mysql_fetch_array($objQuery)) {
										echo "
											<tr>
												<td>".$row['start']."</td>
												<td><span class='th'>".$row['title']."</span>
												   <span class='en'>".$row['title_en']."</span>
												</td>
												

													<td>
													<div  class='adminDiv text-right'>
													<a href='form_event.php?event_id=".$row['event_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
														
																				
													echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDelCar(".$row['event_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													</div>						
														";
										echo "		</td>
												
												
											</tr>";
										
									}
							echo "</table>";
					?>
					</div>
			</div>
		</div>
		
		<!-- /.row -->
		
		
		<!-- ยุวชนเกษตรดีเด่น -->
        <div class="row">
         
				<h2 class="page-header"><span class="th">เกษตรกรดีเด่น</span><span class="en">เกษตรกรดีเด่น</span></h2>
				<hr class='border' />
				<p class="text-right">
					<a href="people.php" style="float: right;margin-top: -50px;">
					<span class="en">ดูทั้งหมด</span>
					<span class="th">ดูทั้งหมด</span>
					</a>
				</p>
           
           
                <div class="row">
					<?
					$sql = "select * from t_people where active = 1 
							order by people_id DESC limit 4 ";
					//echo $sql;
					$objQuery = mysql_query($sql);
						echo "<div class='carousel-inner'>";
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<div class='col-md-3'>
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
										<br clear='all'>
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
           
				<h2 class="page-header"><span class="th">สินค้าวิสาหกิจชุมชน</span><span class="en">สินค้าวิสาหกิจชุมชน</span></h2>
				<hr class='border' />
				<p class="text-right">
					<a href="product.php" style="float: right;margin-top: -50px;">
					<span class="en">ดูทั้งหมด</span>
					<span class="th">ดูทั้งหมด</span>
					</a>
				</p>
            
           
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
										<a href='product_detail.php?Id=".$row['product_id']."'>
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
				<h2 class="page-header"><span class="th">ลิ้งที่น่าสนใจ</span><span class="en">ลิ้งที่น่าสนใจ</span></h2>
				<hr class='border' />
				<p class="text-right;">
					<a href="service.php" style="float: right;margin-top: -50px;">
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
												<img src='../".$row1['path']."' style='width: 100%;' >
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
<? include('footer.php'); ?>
<? include('footer.php') ?>
     
<script type="text/javascript" src="../js/fullcalendar-2.1.1/lib/moment.min.js"></script>  
<script type="text/javascript" src="../js/fullcalendar-2.1.1/fullcalendar.min.js"></script>  
<script type="text/javascript" src="../js/fullcalendar-2.1.1/lang/th.js"></script>  
<script type="text/javascript" src="../script.js"></script>
<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />

		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
		<script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
		

<script language="javascript">
		$(function(){  
  
    $('#calendar').fullCalendar({  
        header: {  
            left: 'prev,next today',    
            center: 'title',  
            right: 'month,agendaWeek,agendaDay',  
        },    
        events: {  
            url: 'data_events.php',  
            error: function() {  
  
            }  
        },      
        eventLimit:true,  
        lang: 'th'  
    });  
       
}); 
	$(function(){

	$("#startDate").datepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
	});
	$("#endDate").datepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 1,
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



//// Calendar

function cmdNewCar(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_event.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_event.php?"+"event_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdDelCar(ID){
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
		url: "function/del_event.php",
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


//////// VDO ////////////////
function cmdHiddenV(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	//alert(ID);

	$.ajax({
		type: "POST",
		url: "function/hidden_vdo.php",
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
function cmdShowV(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_vdo.php",
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


function cmdDelV(ID){
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
		url: "function/del_vdo.php",
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


function left(order){
     // alert(order);
     $.ajax({
     type: "POST",
     url: "function/updatesortorder.php",
     data:  { order : order, type : 1, table : "t_article_cat" },
     success: function(sxAjax){
			alert(sxAjax)
			location.reload();
         }
     });
}

function right(order){
	
    $.ajax({
		type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 2, table : "t_article_cat" },
        success: function(sxAjax){
				alert(sxAjax) 
				location.reload();

		}
    });
}



function upVdo(order){
	//alert(order);
    $.ajax({
        type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 1, table : "t_vdo" },
        success: function(sxAjax){
            if (sxAjax.substr(0,9) == "Completed") {

                location.reload();

            } else {
                alert(sxAjax);
            }
        }
    });


}
function downVdo(order){

    $.ajax({
        type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 0, table : "t_vdo" },
        success: function(sxAjax){
            if (sxAjax.substr(0,9) == "Completed") {

                location.reload();

            } else {
                alert(sxAjax);
            }
        }
    });


}




function upNews(order){
	//alert(order);
    $.ajax({
        type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 1, table : "t_news" },
        success: function(sxAjax){
            if (sxAjax.substr(0,9) == "Completed") {

                location.reload();

            } else {
                alert(sxAjax);
            }
        }
    });


}
function downNews(order){

    $.ajax({
        type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 0, table : "t_news" },
        success: function(sxAjax){
            if (sxAjax.substr(0,9) == "Completed") {

                location.reload();

            } else {
                alert(sxAjax);
            }
        }
    });


}

function bannerleft(order){
    // alert(order);
    $.ajax({
        type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 2, table : "t_gallery" },
        success: function(sxAjax){
            alert(sxAjax)
            location.reload();
        }
    });
}

function left(order){
    // alert(order);
    $.ajax({
        type: "POST",
        url: "function/updatesortorder.php",
        data:  { order : order, type : 1, table : "t_article_cat" },
        success: function(sxAjax){
            alert(sxAjax)
            location.reload();
        }
    });
}


</script>

