<?php include('header.php'); 
$sql = "SELECT * FROM t_km_cat where active = 1 AND cat_km_id = ".$_GET['Cat']." ORDER BY sort_order DESC";
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"> <span class="en"><?=$row['name_en'] ?></span><span class="th"><?=$row['name'] ?></span>
					
				</h3>
                <hr>
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li><a href="km_catergory.php">Self-Service</a></li>
					<li class="active"><span class="en"><?=$row['name_en'] ?></span><span class="th"><?=$row['name'] ?></span></li>
                </ol>
            </div>
        </div>
		
		<div class='adminDiv text-right'>	
			<button type="button" class="btn btn-success adminDiv" onclick="cmdNew()">เพิ่มคลังความรู้</button>
		</div>
		<br>
		<div class="row">
			<?php
				$sql = "SELECT
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
						WHERE";
						
						
						if($_SESSION['userid'] == ""){
								$sql .= " k1.active = 1 AND";
						}else{
								$sql .= " ";
						}
						$sql .= " k1.cat_km_id = ".$_GET['Cat']." ";
						
						$sql .= " group by k1.km_id ORDER BY k1.sort_order DESC ";
					
					//echo $sql;	
						
						
					$data = mysql_query($sql);
				
					$Num_Rows = mysql_num_rows($data);
					$Per_Page = 6;   // Per Page
                    
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
					echo "<div class='col-md-6 col-sm-6'>";
					
					echo "<div  class='adminDiv text-right'> ";
							if($row['flag_index'] == 0){
											
										}else{
											echo "	<a href='#' class='btn btn-default btn-xs' style='color: #000;'>หน้าแรก</a>";
										}
							echo "
													
								<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
								<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
								<a href='form_km.php?km_id=".$row['km_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
								";
								if($row['active'] == 0){
									echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['km_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
								}else{
									echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['km_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
								}
														
									echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['km_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													
								";
					echo "</div>";
					
					
					////////////////////////////////////////////////
					echo "	<div class='km_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='../".$row['images']."' style='width: 100%;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
								<p>".$row['lastDate']."</p>
								<a href='km_detail.php?id=".$row['km_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
					";
					if($row['path'] == ""){
						echo "";
						
					}else{
						echo "<span class='en'><a href='".$row['path']."'>Download</a></span>
							  <span class='th'><a href='".$row['path']."' >ดาวน์โหลดเอกสาร</a></span>";
					}
								
					echo	"</div>
							</div>";		
							
					echo "</div>";
					
					?>
						
					<?php
					}
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
		url: "function/add_km.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_km.php?"+"km_id=" + (sxAjax.substr(10)) ;

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
function cmdShow(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_km.php",
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
</script>


<? include('footer.php'); ?>



