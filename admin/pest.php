<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">องค์ความรู้ โรคระบาด /ศัตรูพืช</span>
					<span class="th">องค์ความรู้ โรคระบาด /ศัตรูพืช</span>
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en"><a href="pest.php">องค์ความรู้ โรคระบาด /ศัตรูพืช</a></span>
						<span class="th"><a href="pest.php">องค์ความรู้ โรคระบาด /ศัตรูพืช้</a></span>
					</li>
                </ol>
            </div>
        </div>
		
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_pest where active = 1 AND parent_id = 0 ORDER BY sort_order ASC";
				$objQuery = mysql_query($sql);
				//echo $sql;
				
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-3 col-sm-6 text-center'>";
							echo "<div class='adminDiv text-right col-md-12'>";
										//<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
										//<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
								echo " 		<a href='form_pest_cat.php?pest_id=".$row['pest_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>";
										if($row['active'] == 0){
											echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['pest_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
										}else{
											echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['pest_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
										}
														
								//		echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['pest_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>";		
								echo "</div>";
					echo "	<div class='article_box'>";
								
							echo "<a href='pest_list.php?Id=".$row['pest_id']."'>";
							echo " <img src='../".$row['images']."'>
										</h4><span class='th'>".$row['title']."</span>
										<span class='en'>".$row['title_en']."</span> 
										
									</h4>
								</a>
							</div>
						</div>";
				}
			?>
		
		
			
            
        </div>
</div>



<? include('footer.php'); ?>



