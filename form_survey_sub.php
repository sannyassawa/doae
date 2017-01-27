<?php include('header.php'); ?>
<?php include('admin/function/form_navigator.php'); ?>



<?php

$sql = " select * from tbl_survey where id = '".$_GET['id_survey']."'";
$query = mysql_query($sql);
$main = mysql_fetch_array($query);


$sql1 = " select * from tbl_survey_sub where id_survey = '".$_GET['id_survey']."' and id = '".$_GET['id']."' order by id desc ";
$query1 = mysql_query($sql1);
$row = mysql_fetch_array($query1);




$tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$tab["nav2"]["th"]="แบบสำรวจ";
$tab["nav2"]["en"]="แบบสำรวจ";
$tab["nav3"]["th"]= $main['title_th'];
$tab["nav3"]["en"]= $main['title_en'];
$tab["nav4"]["th"]= $row['title_th'];
$tab["nav4"]["en"]= $row['title_en'];


$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";
$link_tab["nav3"]["th"]="survey_sub.php?id=".$_GET['id_survey'];
$link_tab["nav4"]["th"]="#";









if(is_array($_POST)){foreach ($_POST as $k => $v){${$k} = trim($v);}}

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(!empty($editid)){
        $update = "update tbl_survey_sub set title_th='$title_th', start_date='$start_date', end_date='$end_date' "
            .", status='$status', update_date = '".date("Y-m-d H:i:s")."'"
            ." where id = '$editid';";
        $objQuery = mysql_query($update);
    }else {

        $sql = " insert into tbl_survey_sub (id_survey, title_th, start_date, end_date, status) values "
            . " ( '$id_survey', '$title_th', '$start_date', '$end_date', '$status');";
        $objQuery = mysql_query($sql);

    }
    header("location: survey_sub.php?id=".$id_survey);
}

?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php  form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>
    <div class="row">
        <form name="form_survey" id="form_survey" method="post" >
            <input type="hidden" name="id_survey" value="<?php echo $_GET['id_survey'];?>" />
            <input type="hidden" name="editid" value="<?php echo $_GET['id'];?>" />
            <table id="survey" class="table">
                <tr>
                    <td>
                        <div class='row title-layout'>
                            <div class='col-lg-2 titlename'>ชื่อแบบฟอร์มการสำรวจ</div>
                            <div class='col-lg-6'><input type="text" name="title_th" id="title_th" size="80" value="<?php echo $row['title_th'];?>" /> </div>
                        </div>
                        <div class='row title-layout'>
                            <div class='col-lg-2 titlename'>ช่วงเวลาที่ใช้</div>
                            <div class='col-lg-6'><input type="text" name="start_date" id="start_date"  value="<?php echo $row['start_date'];?>" placeholder="วันที่เริ่มต้น"/> ถึง <input type="text" name="end_date" id="end_date" value="<?php echo $row['end_date'];?>"  placeholder="วันที่สิ้นสุด"/> </div>
                        </div>
                        <div class='row title-layout'>
                            <div class='col-lg-2 titlename'>Status</div>
                            <div class='col-lg-6'>
                                <input type="radio" name="status" id="status1" value="1" <?php echo ($row['status']==1)?"checked":""; ?>/> <label for="status1">ใช้งาน</label> &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="status" id="status2" value="0" <?php echo ($row['status']==0)?"checked":""; ?>/> <label for="status2">หยุดใช้งาน</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class='row title-layout'>
                            <div class='col-lg-2 titlename'></div>
                            <div class='col-lg-6'>
                                <button name="submit" type="submit" >ตกลง</button>
                                <button name="button" type="button" onclick="javascript:history.go(-1);" >ยกเลิก</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<script>
    $("#form_survey").validate({
        rules: {
            title_th: "required"
        }
    });

    $("#start_date").datepicker({
        dateFormat: 'yy-mm-dd',
        numberOfMonths: 1,
    });
    $("#end_date").datepicker({
        dateFormat: 'yy-mm-dd',
        numberOfMonths: 1,
    });

</script>

<? include('footer.php'); ?>




