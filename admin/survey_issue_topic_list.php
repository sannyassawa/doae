<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>


<div class="container">
<?php

$sql = " select * from tbl_survey where id = '".$_GET['id_survey_sub']."'";
$query = mysql_query($sql);
$main = mysql_fetch_array($query);

$array_tab["contactperson"]["th"]="ข้อมูลการติดต่อ";
$array_tab["contactperson"]["en"]="ข้อมูลการติดต่อ";
$array_tab["servay"]["th"]="แบบสำรวจ";
$array_tab["servay"]["en"]="แบบสำรวจ";
$array_tab["OnlinePoll"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
$array_tab["OnlinePoll"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
$link["OnlinePoll"]["th"]="survey_issue_topic_list.php?id_survey_sub=".$_GET["id_survey_sub"];
$link["OnlinePoll"]["en"]="survey_issue_topic_list.php?id_survey_sub=".$_GET["id_survey_sub"];
$link["servay"]["th"]="survey.php";
$link["servay"]["en"]="survey.php";
$link["contactperson"]["th"]="contact.php";
$link["contactperson"]["en"]="contact.php";

form_navigator($array_tab,$link);


?>
    <hr style=" -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #EEEEEE;
  -moz-use-text-color #FFFFFF;
  border-style: solid none;
  border-width: 1px 0;
  margin: 18px 0;" />

<?php
$tab["OnlinePoll"]["th"]=(strlen($main['title_th'])>50)?mb_substr($main['title_th'], 0, 50, 'utf-8').'...':$main['title_th'];
$tab["OnlinePoll"]["en"]=(strlen($main['title_en'])>50)?mb_substr($main['title_en'], 0, 50, 'utf-8').'...':$main['title_en'];
$link_tab["OnlinePoll"]["th"]="survey_issue_topic_list.php?id_survey_sub=".$_GET["id_survey_sub"];
$link_tab["OnlinePoll"]["en"]="survey_issue_topic_list.php?id_survey_sub=".$_GET["id_survey_sub"];
$addtext["th"]="เพิ่ม";
$addtext["en"]="เพิ่ม";
$addlink["th"]="add_topic_survey_issue.php?id_survey_sub=".$_GET["id_survey_sub"];
?>
        <div class="row">
            <div class="col-lg-12">
                <?php   form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    <table class="table table-sm">
        <thead>
        <tr>
            <th>ลำดับ</th>
            <th>ประเด็นการสำรวจ</th>
            <th>สถานะ</th>
            <th>แก้ไข</th>
        </tr>
        </thead>
        <tbody>
<?php
ob_start("ob_gzhandler");


header("Content-Type: text/html; charset=utf-8");


$sql = " SELECT * ";
$sql .= " FROM tbl_survey_issue  where id_survey_sub = ".$_GET["id_survey_sub"];




        $result = mysql_query($sql);
$i=1;
        while ($row = mysql_fetch_array($result)) {
          echo'  <tr>
            <td id="'.$row["id"].'">'.$i.'</td>
            <td><a href="../admin/survey_issue_sub_topic_list.php?id='.$row["id"].'">'.$row["title_th"].'</a></td>
            <td>';
            if($row["status"]==1){ echo "ใช้งาน";}
            else{
                echo "ไม่ใช้งาน";
            }echo '</td>
           <td> <a href="../admin/edit_topic_issue_survey.php?id='.$row["id"].'&id_survey_sub='.$_GET["id_survey_sub"].'"><h5>แก้ไข</h5></a></td></tr>  ';
            $i++;
        }




?>



        </tbody>

    </table>
            </div>

        </div>
</div>



<? include('footer.php'); ?>
