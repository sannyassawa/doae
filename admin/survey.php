<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>

<?php

$tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$tab["nav2"]["th"]="แบบสำรวจ";
$tab["nav2"]["en"]="แบบสำรวจ";

$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";

$addtext["th"]="เพิ่ม";
$addtext["en"]="เพิ่ม";
$addlink["th"]="form_survey.php";
?>


<!-- Page Content -->
<div class="container">

    <div class="row">
       <?php  form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>

    <div class="row">
        <table id="survey" class="table">
            <?php
            $sql = " select * from tbl_survey order by status desc, id desc ";
            $objQuery = mysql_query($sql);
            while ($row = mysql_fetch_array($objQuery)) {



                echo "<tr>
                        <td>
                            <div class='row title-layout'>
                                <div class='col-lg-2 titlename'>หัวข้อ TH</div>
                                <div class='col-lg-7'><a href='survey_sub.php?id=".$row['id']."'>".$row['title_th']."</a></div>
                                <div class='col-lg-1'>".txActive($row['status'])."</div>
                                <div class='col-lg-2'><a href='form_survey.php?id=".$row['id']."'>แก้ไข</a></div>
                            </div>
                            <div class='row title-layout'>
                                <div class='col-lg-2 titlename'>หัวข้อ EN</div>
                                <div class='col-lg-7'><a href='survey_sub.php?id=".$row['id']."'>".$row['title_en']."</a></div>
                            </div>
                            <div class='row title-layout'>
                                <div class='col-lg-2 titlename'>Link</div>
                                <div class='col-lg-7'><a href='".$row['link']."' target='blank'>".$row['link']."</a></div>
                            </div>
                        </td>
                    </tr>";


            }
            ?>

        </table>

    </div>
</div>


<? include('footer.php'); ?>



