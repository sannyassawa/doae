<?php include('header.php'); 
$sql = "SELECT * FROM t_news_cat where active = 1 AND cat_news_id = ".$_GET['Cat']." ORDER BY sort_order DESC";
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);
?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="th"><?=$row['name'] ?></span><span class="en"><?=$row['name_en'] ?></span>
				</h3>
				<hr />
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
					<li><a href="news_catergory.php">จัดการหมวดหมู่ข่าว</a>
                    </li>
                    <li class="active">ข่าวประชาสัมพันธ์</li>
					
					
                </ol>
            </div>
        </div>
		<div class='adminDiv text-right'>	
						<button type="button" class="btn btn-success adminDiv" onclick="cmdCat()">จัดการหมวดหมู่ข่าว</button>
						<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่มข่าว</button>
					</div>
					<br />
					<br />
					<br />
		<div class="">
			<div class="col-lg-12">


                <div id="myTabContent" class="tab-content">
				<input type="hidden" name="ID" id="ID" value="0"> 
					<?php
					
							echo "<table class='table table-striped'>";
								
								$sql = "SELECT news_id, cat_news_id,title, title_en, DATE_FORMAT(update_date,'%d/%m/%Y') as update_date ,active,flag_index
										FROM t_news
										WHERE cat_news_id = ".$_GET['Cat'];
										
										if($_SESSION['userid'] == ""){
											$sql .= " AND active = 1";
										}else{
											$sql .= " ";
										}
										$sql .= " ORDER BY sort_order DESC";
										
					
									//echo $sql;	
						
						
									$data = mysql_query($sql);
								
									$Num_Rows = mysql_num_rows($data);
									$Per_Page = 20;   // Per Page
									
									$Page = $_GET["Page"];
									if(!$_GET["Page"])
									{
										$Page=1;
									}
									
									$Prev_Page = $Page-1;
									$Next_Page = $Page+1;
									
									$Page_Start = (($Per_Page*$Page)-$Per_Page);
									if($Num_Rows<=$Per_Page)
									{
										$Num_Pages =1;
									}
									else if(($Num_Rows % $Per_Page)==0)
									{
										$Num_Pages =($Num_Rows/$Per_Page) ;
									}
									else
									{
										$Num_Pages =($Num_Rows/$Per_Page)+1;
										$Num_Pages = (int)$Num_Pages;
									}
									
									$sql .=" LIMIT $Page_Start , $Per_Page";
									$data  = mysql_query($sql);
									
									while ($row = mysql_fetch_array($data)) {
										
										echo "<tr>";
											echo "<td style='width: 100px;'>";
												echo "<span>".$row['update_date']."</span>";
											echo "</td>";
											echo "<td class='text-left'>";
												echo "<a href='news_detail.php?id=".$row['news_id']."' ><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></a>";
											echo "</td>";
											echo "<td  class='text-right adminDiv' style='width:400px;'>";
												if($row['flag_index'] == 0){
											
												}else{
													echo "	<span class='btn btn-default btn-xs' style='color: #000;'>หน้าแรก</span>";
												}
												echo "
													
														<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
														<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
														<a href='form_news.php?news_id=".$row['news_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
														";
														if($row['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['news_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['news_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
														
												echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['news_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													
												";
											echo "</td>";
										echo "</tr>";
									}


									?>
										
									<?php
									
									
									
									echo "</table>";
									?>
									<br clear="all">
									<br clear="all">
									<br clear="all">
									<div class="row text-center">
										<div class="col-lg-12">
											<ul class="pagination">
												<li>
													<?
														if($Prev_Page)
														{
															echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&Cat=$_GET[Cat]' id='linkdone'><<</a> ";
														}
													?>
												</li>
												<?
													for($i=1; $i<=$Num_Pages; $i++){
													if($i != $Page)
													{
														echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i&Cat=$_GET[Cat]'>$i</a><li> ";
													}
													else
													{
														echo "<li class='active'><a href='#'>$i</a></li>";
													}
												}
												?>
												
												<li>
													<? 
														if($Page!=$Num_Pages)
														{
															echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&Cat=$_GET[Cat]' id='linkdone'>>></a> ";
														}
													?>
												</li>
												
											</ul>
										</div>
									</div>
								
								
					<?			
								
								
							echo "</div>"; //จบ div tab
						
					?>
				
                    
				</div>
				</div>
            </div>
			<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
		</div>
<? include('footer.php'); ?>
<script type="text/javascript">
function cmdCat(){
	 document.location.href="news_catergory.php";
}
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_news.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_news.php?"+"news_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}

function cmdHidden(ID){
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
function cmdShow(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_news.php",
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


function cmdDel(ID){
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









</script>



