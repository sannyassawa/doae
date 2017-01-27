<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php

$id_survey = $_GET['id_survey'];
$id_survey_sub = $_GET['id_survey_sub'];
$id_survey_issue = $_GET['id_survey_issue'];

$sql = " select * from tbl_survey where id = '".$id_survey."'";
$query = mysql_query($sql);
$main = mysql_fetch_array($query);

$sql = " select * from tbl_survey_sub where id = '".$id_survey_sub."'";
$query = mysql_query($sql);
$main2 = mysql_fetch_array($query);

$sql = " select * from tbl_survey_issue where id = '".$id_survey_issue."'";
$query = mysql_query($sql);
$main3 = mysql_fetch_array($query);

$array_tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$array_tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$array_tab["nav2"]["th"]="แบบสำรวจ";
$array_tab["nav2"]["en"]="แบบสำรวจ";
$array_tab["nav3"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
$array_tab["nav3"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
$array_tab["nav4"]["th"]=(strlen($main2['title_th'])>50)?mb_substr($main2['title_th'], 0, 50, 'utf-8').'...':$main2['title_th'];
$array_tab["nav4"]["en"]=(strlen($main2['title_en'])>50)?mb_substr($main2['title_en'], 0, 50, 'utf-8').'...':$main2['title_en'];
$array_tab["nav5"]["th"]=(strlen($main3['title_th'])>50)?mb_substr($main3['title_th'], 0, 50, 'utf-8').'...':$main3['title_th'];
$array_tab["nav5"]["en"]=(strlen($main3['title_en'])>50)?mb_substr($main3['title_en'], 0, 50, 'utf-8').'...':$main3['title_en'];


$link["nav1"]["th"]="contact.php";
$link["nav2"]["th"]="survey.php";
$link["nav3"]["th"]="survey_sub.php?id=$id_survey";
$link["nav4"]["th"]="survey_issue_topic_list.php?id_survey=$id_survey&id_survey_sub=$id_survey_sub&id_survey_issue=$id_survey_issue";


if(is_array($_POST)){foreach ($_POST as $k => $v){${$k} = trim($v);}}

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(!empty($id_survey_issue)){
        $update = "update tbl_survey_issue set title_th='$title_th', status='$status', update_date = '".date("Y-m-d H:i:s")."'"
            ." where id = '$id_survey_issue';";
        $objQuery = mysql_query($update);
    }else {

        $sql = " insert into tbl_survey_issue (title_th, id_survey_sub, status, create_date, update_date) values "
            . " ( '$title_th', '$id_survey_sub', '$status', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."');";
        $objQuery = mysql_query($sql);

    }
	$id_survey = $_POST['id_survey'];
	$id_survey_sub = $_POST['id_survey_sub'];
	$id_survey_issue = $_POST['id_survey_issue'];
	$redirect = "survey_issue_topic_list.php?id_survey=$id_survey&id_survey_sub=$id_survey_sub&id_survey_issue=$id_survey_issue";
    header("location: ".$redirect);
}

?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php  form_navigator($array_tab, $link, $addtext, $addlink); ?>
    </div>
    <div class="row">
        <form name="form_survey" id="form_survey" method="post" >
            <input type="hidden" name="id_survey" value="<?php echo $id_survey;?>" />
			<input type="hidden" name="id_survey_sub" value="<?php echo $id_survey_sub;?>" />
            <input type="hidden" name="id_survey_issue" value="<?php echo $id_survey_issue;?>" />
            <table id="survey" class="table">
                <tr>
                    <td>
                        <div class='row title-layout'>
                            <div class='col-lg-2 titlename'>ประเด็นการสำรวจ</div>
                            <div class='col-lg-6'><input type="text" name="title_th" id="title_th" size="80" value="<?php echo $main3['title_th'];?>" /> </div>
                        </div>
                        
                        <div class='row title-layout'>
                            <div class='col-lg-2 titlename'>Status</div>
                            <div class='col-lg-6'>
                                <input type="radio" name="status" id="status1" value="1" <?php echo ($main3['status']==1)?"checked":""; ?>/> <label for="status1">ใช้งาน</label> &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="status" id="status2" value="0" <?php echo ($main3['status']==0)?"checked":""; ?>/> <label for="status2">หยุดใช้งาน</label> &nbsp;&nbsp;&nbsp;&nbsp;
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




