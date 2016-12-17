<?php include('header.php'); ?>




<?php
    $select = "select * from tbl_survey where id = '".$_GET['id']."'";
    $query = mysql_query($select);
    $row = mysql_fetch_array($query);


    if(is_array($_POST)){foreach ($_POST as $k => $v){${$k} = $v;}}

    if($_SERVER['REQUEST_METHOD']=='POST'){

        if(!empty($editid)){
            $update = "update tbl_survey set title_th='$title_th', title_en='$title_en', link='$link', type='$type' "
                        .", status='$status', update_date = '".date("Y-m-d H:i:s")."'"
                        ." where id = '$editid';";
            $objQuery = mysql_query($update);
        }else {

            $sql = " insert into tbl_survey (title_th, title_en, link, type, status) values "
                        . " ( '$title_th', '$title_en', '$link', '$type', '1');";
            $objQuery = mysql_query($sql);

        }
        header("location: survey.php");
    }

?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <h4>แบบสำรวจ</h4>
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
                        <div class='col-lg-2 titlename'>TYPE</div>
                        <div class='col-lg-6'>
                            <input type="radio" name="type" id="type1" value="1" <?php echo ($row['type']==1)?"checked":""; ?>/> <label for="type1">Link</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="type" id="type2" value="2" <?php echo ($row['type']==2)?"checked":""; ?>/> <label for="type2">5 4 3 2 1</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="type" id="type3" value="3" <?php echo ($row['type']==3)?"checked":""; ?>/> <label for="type3">Yes / No</label>
                        </div>
                    </div>
                    <div class='row title-layout'>
                        <div class='col-lg-2 titlename'></div>
                        <div class='col-lg-6'>
                            <button name="submit" type="submit" >ตกลง</button>
                            <button name="reset" type="reset" >ยกเลิก</button>
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




