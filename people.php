<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="en">เกษตรกรดีเด่น</span><span class="th">เกษตรกรดีเด่น</span></h3>
                
				<ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                   
					<li class="active"><span class="en">เกษตรกรดีเด่น</span><span class="th">เกษตรกรดีเด่น</span></li>
                </ol>
            </div>
        </div>
		
	
		<div class="row">
			<?php
				$sql = "select * from t_people ";
						
						
						if($_SESSION['userid'] == ""){
								$sql .= " where active = 1 ";
						}else{
								$sql .= " ";
						}
						
						
						$sql .= "ORDER BY people_id DESC ";
					
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
							echo "
													
								<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-up'></i></a>
								<a href='' class='btn btn-default btn-xs'><i class='fa fa-arrow-down'></i></a>
								<a href='form_people.php?people_id=".$row['people_id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil-square-o'></i> แก้ไข</a>
								";
								if($row['active'] == 0){
									echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row['people_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
								}else{
									echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row['people_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
								}
														
									echo " <a href='#' class='btn btn-danger btn-xs' onclick='cmdDel(".$row['people_id'].")'><i class='fa fa-trash-o'></i> ลบ</a>
													
								";
					echo "</div>";
					
					
					////////////////////////////////////////////////
					echo "	<div class='people_box_2'>
							<div class='col-md-5 col-sm-5'>
								<img src='".$row['images']."' style='width: 100%; height: 235px;'>
							</div>
							<div class='col-md-7 col-sm-7'>
								<h4><span class='th'>".$row['title']."</span> <span class='en'>".$row['title_en']."</span></h4>
								<p>".$row['lastDate']."</p>
								<a href='people_detail.php?id=".$row['people_id']."' class='btn btn-default'>ข้อมูลเพิ่มเติม</a> 
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
		url: "function/add_people.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_people.php?"+"people_id=" + (sxAjax.substr(10)) ;

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
		url: "function/hidden_people.php",
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
		url: "function/show_people.php",
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
		url: "function/del_people.php",
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



