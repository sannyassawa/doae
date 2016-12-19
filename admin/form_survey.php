<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php
    $select = "select * from tbl_survey where id = '".$_GET['id']."'";
    $query = mysql_query($select);
    $row = mysql_fetch_array($query);



    $tab["nav1"]["th"]="ข้อมูลการติดต่อ";
    $tab["nav1"]["en"]="ข้อมูลการติดต่อ";
    $tab["nav2"]["th"]="แบบสำรวจ";
    $tab["nav2"]["en"]="แบบสำรวจ";

    $link_tab["nav1"]["th"]="contact.php";
    $link_tab["nav2"]["th"]="survey.php";

    $addtext["th"]="เพิ่ม";
    $addtext["en"]="เพิ่ม";
    $addlink["th"]="form_survey.php";



    if(is_array($_POST)){foreach ($_POST as $k => $v){${$k} = $v;}}

    if($_SERVER['REQUEST_METHOD']=='POST'){

        if(!empty($editid)){
            $update = "update tbl_survey set title_th='$title_th', title_en='$title_en', link='$link', type='$type' "
                        .", status='$status', update_date = '".date("Y-m-d H:i:s")."'"
                        ." where id = '$editid';";
            $objQuery = mysql_query($update);
        }else {

            $sql = " insert into tbl_survey (title_th, title_en, link, type, status) values "
                        . " ( '$title_th', '$title_en', '$link', '$type', '$status');";
            $objQuery = mysql_query($sql);

        }
        header("location: survey.php");
    }

?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php  form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>
    <div class="row">
        <form name="form_survey" id="form_survey" method="post" >
        <input type="hidden" name="editid" value="<?php echo $_GET['id'];?>" />
        <table id="survey" class="table">
            <tr>
                <td>
                    <div class='row title-layout'>
                        <div class='col-lg-2 titlename'>หัวข้อ TH</div>
                        <div class='col-lg-6'><input type="text" name="title_th" id="title_th" size="80" value="<?php echo $row['title_th'];?>" /> </div>
                    </div>
                    <div class='row title-layout'>
                        <div class='col-lg-2 titlename'>หัวข้อ EN</div>
                        <div class='col-lg-6'><input type="text" name="title_en" id="title_en" size="80" value="<?php echo $row['title_en'];?>" /> </div>
                    </div>
                    <div class='row title-layout'>
                        <div class='col-lg-2 titlename'>Link</div>
                        <div class='col-lg-6'><input type="text" name="link" id="link" size="50" value="<?php echo $row['link'];?>" /> </div>
                    </div>
                    <div class='row title-layout'>
                        <div class='col-lg-2 titlename'>ประเภทแบบสอบถาม</div>
                        <div class='col-lg-6'>
                            <input type="radio" name="type" id="type1" value="1" <?php echo ($row['type']==1)?"checked":""; ?>/> <label for="type1">ลิงค์ภายนอก</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="type" id="type2" value="2" <?php echo ($row['type']==2)?"checked":""; ?>/> <label for="type2">ระดับการให้คะแนน</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="type" id="type3" value="3" <?php echo ($row['type']==3)?"checked":""; ?>/> <label for="type3">เห็นด้วย / ไม่เห็นด้วย</label>
                        </div>
                    </div>
                    <div class='row title-layout'>
                        <div class='col-lg-2 titlename'>สถานะการใช้งาน</div>
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
</script>

<? include('footer.php'); ?>




