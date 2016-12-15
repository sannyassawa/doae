<?php include('header.php'); 
$sql1 = "SELECT * FROM t_about where active = 1 AND about_id = ".$_GET['Pa'];
$objQuery1 = mysql_query($sql1);
$row1 = mysql_fetch_array($objQuery1);
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en"><?=$row1['title_en'] ?></span><span class="th"><?=$row1['title'] ?></span>
				</h1>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="about.php">เกี่ยวกับหน่วยงาน</a></span>
						<span class="th"><a href="about.php">เกี่ยวกับหน่วยงาน</a></span>
					</li>
					<li class="active">
						<span class="en"><?=$row1['title_en'] ?></span><span class="th"><?=$row1['title'] ?></span>
					</li>
                </ol>
            </div>
			
        </div>
		
	
		<div class="row">
			<?php

				$sql = "SELECT * FROM t_about where ";
				if($_SESSION['userid'] == ""){
								$sql .= " active = 1 and";
						}else{
								$sql .= " ";
						}
					
						
						$sql .= " parent_id = ".$_GET['Pa']." ORDER BY sort_order ASC"; 
						
						//echo $sql;
						
				$objQuery = mysql_query($sql);
				while ($row = mysql_fetch_array($objQuery)) {
					echo "<div class='col-md-4 col-sm-6'>
							<div class='km_box1'>";
							echo "<div class='row'>";
									if($row['template'] == 0){
										echo "<a href='about_sub.php?Pa=".$row['about_id']."'>";
									}else if($row['template'] == 1){
										echo "<a href='about_list.php?Id=".$row['about_id']."'>";
									}else{
										echo "<a href='about_detail.php?id=".$row['about_id']."'>";
									}
							
										echo "<div class='col-md-4'>";
										echo "<img src='".$row['icon']."' style='width: 100%;'>";
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
<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
<input type="hidden" name="parent_id" id="parent_id" value="<?=$_GET['Pa'] ?>">
<input type="hidden" name="ID" id="ID" value="0"> 
<script type="text/javascript">




</script>

<? include('footer.php'); ?>



