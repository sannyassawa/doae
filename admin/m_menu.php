<?php include('header.php'); 
?>
<style>
.li_menu{
	background: #3a7f14;
    color: #fff !important;
}

</style>

<!-- Page Content -->
<div class="container">
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">จัดการเมนู</h1>
            </div>
        </div>
			<div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
              <? include('sidebar.php') ?>
              
			</div>
            <!-- Content Column -->
            <div class="col-md-9">
                <div id="bs-example-navbar-collapse-1" class="menu_team">
                
                <?php
                $sql = "SELECT * FROM functions where active = 1 ";
                $objQuery = mysql_query($sql);
                //echo $sql;
                    while ($row = mysql_fetch_array($objQuery)) {
                        if($row['level'] == 1){
                            echo "<li>
                                            <a href='changeheader.php?id=".$row['function_id']."'>
                                            <span class='th'>".$row['name']."</span>
                                            <span class='en'>".$row['name_en']."</span>
                                        </a>
                                    </li>";
                            
                        }else if(($row['level'] == 2)){
                            echo "<li class='dropdown'>
                                    <a href='changeheader.php?id=".$row['function_id']."'>
                                        <span class='th'>".$row['name']."</span>
                                        <span class='en'>".$row['name_en']."</span>
                                            <b class='caret'></b></a>
										<input type='button' value='เพิ่มเมนูย่อย '  onclick='cmdNew(".$row['function_id'].")' class='btn btn-info btn-xs' style='float: right;' >
                                    <ul>";
                                        $sql1 = "SELECT * FROM functions where parent_id = ".$row['function_id'];
                                        $objQuery1 = mysql_query($sql1);
                                        //echo $sql;
                                            while ($row1 = mysql_fetch_array($objQuery1)) {
                                                echo "<li>";
														if($row1['active'] == 0){
															echo " <a href='#' class='btn btn-success btn-xs' onclick='cmdShow(".$row1['function_id'].")'><i class='fa fa-minus-square-o'></i> แสดง</a>";
														}else{
															echo " <a href='#' class='btn btn-warning btn-xs' onclick='cmdHidden(".$row1['function_id'].")'><i class='fa fa-minus-square-o'></i> ซ่อน</a>";
														}
                                                echo "        <a href='changeheader.php?id=".$row1['function_id']."'>
                                                        <span class='th'>".$row1['name']."</span>
                                                        <span class='en'>".$row1['name_en']."</span>
                                                        
                                                    </a>
                                                </li>";
                                            }
                            
                            echo "  </ul>
                                    </li>";
                        }
                        
                    
                }

                ?>
                
               
                
                    
            </div>
            </div>
        </div>
</div>

<style>
.menu_team li {
	 padding: 10px 0px;
    border-bottom: 1px solid #efefef;
}
</style>

<input type='hidden' name="ID" id="ID" value="0">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">

function cmdHidden(ID){
	//alert(ID);
	
	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();

    params = params + "&" + $('#ID').serialize();
	params = params + "&" + $('#user_id').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/hidden_menu.php",
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
		url: "function/show_menu.php",
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

function cmdNew(ID){


	document.getElementById('ID').value = ID;
	var params = "n=" + Math.random();
	params = params + "&" + $('#ID').serialize();

	

	$.ajax({
		type: "POST",
		url: "function/add_menu.php",
		data: params,
		success: function(sxAjax){			
			if (sxAjax.substr(0,9) == "Completed") {
				alert('บันทึกเรียบร้อยแล้ว')
				window.location.href = "m_menu.php";

			} else {
				alert(sxAjax);
			}	
		}
	});	
}
</script>
<? include('footer.php'); ?>



