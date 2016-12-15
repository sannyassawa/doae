<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en">บริหารของกรมส่งเสริม</span><span class="th">บริหารของกรมส่งเสริม</span></h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
					<li class="active"><span class="en">บริหารของกรมส่งเสริม</span><span class="th">บริหารของกรมส่งเสริม</span></li>
                </ol>
            </div>
        </div>
		
	
		<div class="row">
			<?php
				$sql = "SELECT * FROM t_service_cat WHERE active = 1  ORDER BY sort_order ASC";
				$objQuery = mysql_query($sql);
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-12 col-sm-12'>
							<div class='service_box'>
								<h4><span class='th'>".$row['name']."</span> <span class='en'>".$row['name_en']."</span></h4>
							</div>
					</div>";
				}
			?>
			
		</div>
</div>



<? include('footer.php'); ?>



