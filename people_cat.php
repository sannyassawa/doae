<?php include('header.php'); ?>


<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
					<span class="en">บุคลากรดีเด่นด้านการเกษตร</span>
					<span class="th">บุคลากรดีเด่นด้านการเกษตร</span>
				</h1>
				<hr />
                <ol class="breadcrumb">
                    <li>
						<span class="en"><a href="index.php">Home</a></span>
						<span class="th"><a href="index.php">หน้าหลัก</a></span>
                    </li>
                    <li class="active">
						<span class="en">บุคลากรดีเด่นด้านการเกษตร</span>
						<span class="th">บุคลากรดีเด่นด้านการเกษตร</span>
					</li>
				
                </ol>
            </div>
        </div>




<div class="container">
    <div class="row">
        <div class="col-md-12">
		<div class='boxPeople'>
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
				<?php
							$sql = "SELECT * FROM t_people_cat WHERE active = 1 ";
							
							$objQuery = mysql_query($sql);
								while ($row = mysql_fetch_array($objQuery)) {
									echo "<div class='panel panel-default'>
										<span class='side-tab' data-target='#tab".$row['cat_people_id']."' data-toggle='tab' role='tab' aria-expanded='false'>
											<div class='panel-heading' role='tab' id='headingOne'data-toggle='collapse' data-parent='#accordion' href='#collapse".$row['cat_people_id']."' aria-expanded='true' aria-controls='collapse".$row['cat_people_id']."'>
												<h4 class='panel-title'><i class='fa fa-chevron-down' aria-hidden='true'></i> <span class='en'>".$row['name_en']."</span><span class='th'>".$row['name']."</span>";
												
												
												
									echo"	</h4>
										</div>
								
										</span>";
										
										if($row['cat_people_id'] == 1){
											echo "<div id='collapse".$row['cat_people_id']."' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading".$row['cat_people_id']."'>";
										}else{
											echo "<div id='collapse".$row['cat_people_id']."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading".$row['cat_people_id']."'>";
										}
										
										
										
									echo	"<div class='panel-body'>";
												$sql1 = "SELECT * FROM t_people where active = 1 and ";
													
												$sql1 .= "cat_people_id =".$row['cat_people_id'];
											
												$objQuery1 = mysql_query($sql1);
												
												//echo $sql1;

												while ($row1 = mysql_fetch_array($objQuery1)) {
												
													echo "<div class='col-md-3 col-sm-3'>";
													echo "	<div class='people_box_2'>
															
															<div class='text-center'>
															<a href='people_detail.php?Id=".$row1['people_id']."'>
																<img class='img-responsive img-hover' src='".$row1['images']."' alt='' style='height: 250px;width: 100%'>
															</a> 
															<br clear='all'>
															<h5><span class='th'>".$row1['title']."</span>
															   <span class='en'>".$row1['title_en']."</span></h5>
															</div>
															
															";
												
													echo "</div>";
													echo "</div>";
												}
											
											echo "</div>
										</div>
									</div>";
									
								}
									
								
								
								

						?>
				
				
			
	</div>			
</div>
		</div>


</div>
</div>
</div>
		<? include('footer.php'); ?>	
		<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['userid'] ?>">
		<input type="hidden" name="cat_people_id" id="cat_people_id" value="0">
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
		url: "function/add_people_cat.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
                document.location.href="form_people_cat.php?"+"cat_people_id=" + (sxAjax.substr(10)) ;

			} else {
				alert(sxAjax);
			}	
		}
	});	


}
function cmdNewF(ID){


	document.getElementById('cat_people_id').value = ID;
	var params = "n=" + Math.random();
	
	var params = "n=" + Math.random();
	params = params + "&" + $('#user_id').serialize();
    params = params + "&" + $('#cat_people_id').serialize();
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

function cmdHiddenC(cat_people_id){
	//alert(ID);
	
	document.getElementById('cat_people_id').value = cat_people_id;
	var params = "n=" + Math.random();

    params = params + "&" + $('#cat_people_id').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_people_cat.php",
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
function cmdShowC(cat_people_id){
	//alert(ID);
	
	document.getElementById('cat_people_id').value = cat_people_id;
	var params = "n=" + Math.random();

    params = params + "&" + $('#cat_people_id').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/show_people_cat.php",
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


function cmdDelC(cat_people_id){
	//alert(ID);
	if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
		//return true;
	}else{
		return false;
	}
	
	document.getElementById('cat_people_id').value = cat_people_id;
	var params = "n=" + Math.random();

    params = params + "&" + $('#cat_people_id').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/del_people_cat.php",
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








