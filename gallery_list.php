<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">ภาพกิจกรรม</span>
					<span class="th">ภาพกิจกรรม</span>
					
				</h1>
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
            </div>
        </div>
		
	
		<div class="row">
			<?php
						$sql = "select * from t_gallery where active = 1 ";
						
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
								echo "<div class='col-md-3 img-portfolio'>";
						
									////////////////////////////////////////////////
									echo "	<a href='gallery_detail.php?Id=".$row['gallery_id']."'>
											<img class='img-responsive img-hover' src='".$row['images']."' alt=''>
										</a>
										<h5><span class='th'>".$row['title']."</span>
										   <span class='en'>".$row['title_en']."</span></h5>
									  </div>";
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



