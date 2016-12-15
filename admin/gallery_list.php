<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
					<span class="en">ภาพกิจกรรม</span>
					<span class="th">ภาพกิจกรรม</span>
					
				</h3>
				<hr>
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li>
						<span class="en"><a href="gallery_list.php">ภาพกิจกรรม</a></span>
						<span class="th"><a href="gallery_list.php">ภาพกิจกรรม</a></span>
					</li>
					<li class="active">
						<span class="en"><?=$row['title_en'] ?></span><span class="th"><?=$row['title'] ?></span>
					</li>
                </ol>
				<div class='adminDiv text-right'>	
						<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่ม</button>
					</div>
            </div>
        </div>
		
	
		<div class="row">
			<?php
						$sql = "select * from t_gallery  ";
						if($_SESSION['userid'] == ""){
								$sql .= "  where active = 1 ";
						}else{
								$sql .= " ";
						}
						$sql .= "order by gallery_id DESC ";
					
					
						//echo $sql;
						
						
					$data = mysql_query($sql);
				
					$Num_Rows = mysql_num_rows($data);
					$Per_Page = 12;   // Per Page
                    
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
						echo "<div class='col-md-12 detailGall'>";
						
							
						echo "
							<table width='100%' border='0'>
							  <tbody>
								<tr>
								  <td rowspan='4' valign='top' style='width: 280px;'>
									<img class='img-responsive img-hover' src='../".$row['images']."' alt=''>";
									echo "<div  class='adminDiv text-right'> ";
									if($row['flag_index'] == 0){
												
											}else{
												echo "	<a href='#' class='btn btn-default btn-xs' style='color: #000;'>หน้าแรก</a>";
											}
												echo "

													<a href='form_gallery.php?gallery_id=".$row['gallery_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
													";
													if($row['active'] == 0){
														echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['gallery_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
													}else{
														echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['gallery_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
													}
																			
														echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['gallery_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
																		
													";
										echo "</div>";
									
						  echo "</td>
								  <td align='right' valign='middle' style='width: 185px;'>หัวข้อภาษาไทย :</td>
								  <td valign='middle'><a href='gallery_detail.php?Id=".$row['gallery_id']."'>".$row['title']."</a></td>
								  <td rowspan='4' valign='top' style='width: 70px;'>
									<a href='#' onclick='upVdo(10)' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
									<a href='#' onclick='upVdo(10)' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
								  </td>
								  <td rowspan='4' valign='top' align='right' style='width: 40px;'>
									<a href='gallery_detail.php?Id=".$row['gallery_id']."'>
										แก้ไข
									</a>
								  </td>
								</tr>
								<tr>
								  <td align='right' valign='middle'> หัวข้อภาษาอังกฤษ : </td>
								  <td valign='top'><a href='gallery_detail.php?Id=".$row['gallery_id']."'>".$row['title_en']."</a></td>
								</tr>
								<tr>
								  <td align='right' valign='middle'>วันที่กิจกรรม :</td>
								  <td valign='middle'>&nbsp;</td>
								</tr>
								<tr>
								  <td align='right' valign='middle'>สถานะการแสดงผล :</td>
								  <td valign='middle'>";
									if($row['active'] == 1 ){echo "ใช้งาน";}else{echo "ไม่ใช้งาน";}
										
							echo "</td>
								</tr>
							  </tbody>
							</table>
						";
					echo "</div>";
									
				}
			echo "</div>"; 
						
					
					
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
				
        </div>
		<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
		<input type="hidden" name="ID" id="ID" value="0"> 
</div>
<script type="text/javascript">
function cmdNew(){

	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    
    //params = params + "&" + $('#Coll').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_gallery.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_gallery.php?"+"gallery_id=" + (sxAjax.substr(10)) ;

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
function cmdShow(ID){
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
</script>




<? include('footer.php'); ?>



