<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">Online Survey</span><span class="th">แบบสำรวจ</span>
				</h1>
				
                <ol class="breadcrumb">
                   <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="contact.php">ข้อมูลการติดต่อ</a></span>
						<span class="th"><a href="contact.php">ข้อมูลการติดต่อ</a></span>
					</li>
                </ol>
            </div>
        </div>
	
		<div class="row">
			<div class="col-lg-12">
				<? $sql = " select * from t_survey   ";
						
							$objQuery = mysql_query($sql);
				
							while ($row = mysql_fetch_array($objQuery)) {
								echo "<h4>";
								
									echo "<a href='question.php?survey_id=".$row['survey_id']."'>".$row['name']."</a></td>";
						
								
									
									
								echo "</h4>";
							
							}
						?>
			</div>
			
        </div>
</div>



<? include('footer.php'); ?>



