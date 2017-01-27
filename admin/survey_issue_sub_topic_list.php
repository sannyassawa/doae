<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>


<div class="container">
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
$link["nav4"]["th"]="survey_issue_topic_list.php?id_survey=$id_survey&id_survey_sub=$id_survey_sub";


$addtext["th"]="เพิ่ม";
$addtext["en"]="เพิ่ม";
$addlink["th"]="form_survey_issue_sub.php?id_survey=$id_survey&id_survey_sub=$id_survey_sub&id_survey_issue=$id_survey_issue";

form_navigator($array_tab,$link,$addtext,$addlink);


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


        <div class="row">
            <div class="col-lg-12">
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


$sql = " SELECT * FROM tbl_survey_issue_sub  where  id_survey_issue ='$id_survey_issue'";



        $result = mysql_query($sql);
        $i=1;
        while ($row = mysql_fetch_array($result)) {
		$id_survey_issue_sub = $row["id"];
          echo'  <tr>
            <td id="'.$row["id"].'">'.$i.'</td>
            <td>'.$row["title_th"].'</td>
            <td>';
            if($row["status"]==1){ echo "ใช้งาน";}
            else{
                echo "ไม่ใช้งาน";
            }echo "</td>
           <td> <a href='../admin/form_survey_issue_sub.php?id_survey=$id_survey&id_survey_sub=$id_survey_sub&id_survey_issue=$id_survey_issue&id_survey_issue_sub=$id_survey_issue_sub'><h5>แก้ไข</h5></a></td></tr>  ";

            $i++;   }




?>



        </tbody>

    </table>
            </div>

        </div>
</div>



<? include('footer.php'); ?>
