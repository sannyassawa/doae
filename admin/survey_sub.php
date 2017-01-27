<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php
$id_survey = $_GET['id'];
$sql = " select * from tbl_survey where id = '".$id_survey."'";
$query = mysql_query($sql);
$main = mysql_fetch_array($query);


$tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$tab["nav2"]["th"]="แบบสำรวจ";
$tab["nav2"]["en"]="แบบสำรวจ";
$tab["nav3"]["th"]= (strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
$tab["nav3"]["en"]= (strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];




$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";

$_SESSION['tab'] = $tab;
$_SESSION['link_tab'] = $link_tab;

$addtext["th"]="เพิ่มแบบสำรวจ";
$addtext["en"]="เพิ่มแบบสำรวจ";
$addlink["th"]="form_survey_sub.php?id_survey=".$id_survey;
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
                <th>อับเดต</th>
                <th>สภานะ</th>
                <th>แก้ไข</th>
                <th>ดูผลการสำรวจ</th>
            </tr>

            <?php
            if($main['type']==2){
                $report = "report-survery-a.php"; // 54321
            }else{
                $report = "report-survery-b.php"; // yesno
            }

            $sql = " select * from tbl_survey_sub where id_survey = '".$id_survey."' order by status desc, id desc ";
            $objQuery = mysql_query($sql);
            while ($row = mysql_fetch_array($objQuery)) {
				$id_survey_sub = $row['id'];

                echo "<tr>
                        <td><a href='survey_issue_topic_list.php?id_survey=".$id_survey."&id_survey_sub=".$id_survey_sub."'>".$row['title_th']."</a></td>
                        <td>".$row['start_date']." - ".$row['end_date']."</td>
                        <td>".$row['update_date']."</td>
                        <td>".txActive($row['status'])."</td>
                        <td><a href='form_survey_sub.php?id_survey=".$id_survey."&id=".$id_survey_sub."'>แก้ไข</a></td>
                        <td><a href='".$report."?id_survey=".$id_survey."&id_survey_sub=".$id_survey_sub."'>ดูผลการสำรวจ</a></td>
                    </tr>";


            }
            ?>

        </table>

    </div>
</div>


<? include('footer.php'); ?>



