<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php
    $sql = " select * from tbl_survey where id = '".$_GET['id']."'";
    $query = mysql_query($sql);
    $main = mysql_fetch_array($query);


$tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$tab["nav2"]["th"]="แบบสำรวจ";
$tab["nav2"]["en"]="แบบสำรวจ";
$tab["nav3"]["th"]= $main['title_th'];
$tab["nav3"]["en"]= $main['title_en'];



$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";


$addtext["th"]="เพิ่มแบบสำรวจ";
$addtext["en"]="เพิ่มแบบสำรวจ";
$addlink["th"]="form_survey_sub.php?id_survey=".$main['id'];
?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php  form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>

    <div class="row">
        <table id="survey" class="table">
            <tr>
                <th>แบบฟอร์มการสำรวจ</th>
                <th>ช่วงเวลาที่ใช้</th>
                <th>สภานะ</th>
                <th>แก้ไข</th>
                <th>ดูผลการสำรวจ</th>
            </tr>

            <?php
            $sql = " select * from tbl_survey_sub where id_survey = '".$main['id']."' order by id desc ";
            $objQuery = mysql_query($sql);
            while ($row = mysql_fetch_array($objQuery)) {



                echo "<tr>
                        <td><a href='issue.php?id_survey_sub=".$row['id']."'>".$row['title_th']."</a></td>
                        <td>".$row['start_date']." - ".$row['end_date']."</td>
                        <td>".txActive($row['status'])."</td>
                        <td><a href='form_survey_sub.php?id_survey=".$main['id']."&id=".$row['id']."'>แก้ไข</a></td>
                        <td>ดูผลการสำรวจ</td>
                    </tr>";


            }
            ?>

        </table>

    </div>
</div>


<? include('footer.php'); ?>



