<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class='en'>ข่าวประชาสัมพันธ์</span><span class='th'>ข่าวประชาสัมพันธ์</span></h3>
				<hr / >
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="active">ข่าวประชาสัมพันธ์</li>
					
					
                </ol>
            </div>
        </div>
		
		<div class="">
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
								
							echo "	<a href='#News-".$row['cat_news_id']."' data-toggle='tab'>
										<span class='en'>".$row['name_en']."</span>
										<span class='th'>".$row['name']."</span>
									</a>
								</li>
							";
						}
					?>
                </ul>

                <div id="myTabContent" class="tab-content">
				<input type="hidden" name="ID" id="ID" value="0"> 
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
								
								$sql = "SELECT news_id, cat_news_id,title, title_en, DATE_FORMAT(update_date,'%d/%m/%Y') as update_date ,active
										FROM t_news
										WHERE cat_news_id = ".$row1['cat_news_id'];
										
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
						}
					?>
				
                    
				</div>
				</div>
            </div>
			<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
		</div>
<? include('footer.php'); ?>
<script type="text/javascript">
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



