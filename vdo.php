<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en">VDO</span><span class="th">หมวดหมู่สื่อมัลติมิเดีย</span></h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                
					<li class="active"><span class="en">VDO</span><span class="th">หมวดหมู่สื่อมัลติมิเดีย</span></li>
                </ol>
            </div>
        </div>
		
		
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_vdo_cat where active = 1  ";

				$objQuery = mysql_query($sql);
			
				
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-3 col-sm-6 text-center'>
							<div class='vdo_box'>";
								
							echo "<a href='vdo_list.php?Cat=".$row['cat_vdo_id']."'>";
							
							echo " <img src='".$row['cover']."'>";
							echo "<br>";
							echo "	</h4><span class='th'>".$row['name']."</span>
										<span class='en'>".$row['name_en']."</span> 
										
									</h4>
								</a>
							</div>
						</div>";
				}
			?>
				
        </div>
</div>



<? include('footer.php'); ?>



