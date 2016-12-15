<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">เกี่ยวกับหน่วยงาน</span>
					<span class="th">เกี่ยวกับหน่วยงาน</span>
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">เกี่ยวกับหน่วยงาน</span>
						<span class="th">เกี่ยวกับหน่วยงาน</span>
					</li>
                </ol>
            </div>
        </div>
		
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_about where active = 1 AND parent_id = 0 ORDER BY sort_order ASC";
				$objQuery = mysql_query($sql);
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-4 col-sm-6'>
							<div class='km_box1'>";
							
							echo "<div class='adminDiv text-right col-md-12'>";
										//<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										//<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
								echo " 		<a href='form_about.php?about_id=".$row['about_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
										if($row['active'] == 0){
											echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['about_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
										}else{
											echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['about_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
										}
														
								//		echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['about_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>";		
								echo "</div>";
							echo "<div class='row'>";
								
									if($row['template'] == 0){
										echo "<a href='about_sub.php?Pa=".$row['about_id']."'>";
									}else if($row['template'] == 1){
										echo "<a href='about_list.php?Id=".$row['about_id']."'>";
									}else{
										echo "<a href='about_detail.php?id=".$row['about_id']."'>";
									}
							
										echo "<div class='col-md-4'>";
										echo "<img src='../".$row['icon']."' style='width: 100%;'>";
										echo "</div>";
										echo "<div class='col-md-8'>";
										echo "<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span> </h4>";
										echo "</div>";
										
								echo "  </a>

							</div>
					</div>
				</div>";

				}
			?>
		
		
			
            
        </div>
</div>



<? include('footer.php'); ?>



