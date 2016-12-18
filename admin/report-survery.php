<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php
$sql1 = " select * from tbl_survey where id = '".$_GET['id_survey']."'";
$query1 = mysql_query($sql1);
$main1 = mysql_fetch_array($query1);


$sql2 = " select * from tbl_survey_sub where id = '".$_GET['id_survey_sub']."'";
$query2 = mysql_query($sql2);
$main2 = mysql_fetch_array($query2);

$tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$tab["nav2"]["th"]="แบบสำรวจ";
$tab["nav2"]["en"]="แบบสำรวจ";
$tab["nav3"]["th"]= (strlen($main1['title_th'])>50)?mb_substr($main1['title_th'], 0, 50, 'utf-8').'...':$main1['title_th'];
$tab["nav3"]["en"]= (strlen($main1['title_en'])>50)?mb_substr($main1['title_en'], 0, 50, 'utf-8').'...':$main1['title_en'];
$tab["nav4"]["th"]= (strlen($main2['title_th'])>50)?mb_substr($main2['title_th'], 0, 50, 'utf-8').'...':$main2['title_th'];


$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";
$link_tab["nav3"]["th"]="survey_sub.php?id=".$main1['id'];
$link_tab["nav4"]["th"]="#";

?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php  form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>

    <div class="row">
        <br/>
        <div class="col-md-12">สรุปผลจากการสำรวจ</div>
    </div>
    <div class="row">
        <div class="col-md-12">จำนวนผู้เข้าร่วมสำรวจทั้งหมด 79 คน</div>
    </div>

    <div class="row">
        <br/><br/>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table" id="report-survey">
                <tr>
                    <th>หัวข้อการประเมิน</th>
                    <th>มากที่สุด</th>
                    <th>มาก</th>
                    <th>ปานกลาง</th>
                    <th>ค่อนข้างน้อย</th>
                    <th>น้อยที่สุด</th>
                </tr>
                <?php
                    $sql = " select * from tbl_survey_sub where id_survey = '".$main['id']."' order by status desc, id desc ";
                    $objQuery = mysql_query($sql);
                    while ($row = mysql_fetch_array($objQuery)) {

                ?>


                <tr>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>

</div>


<? include('footer.php'); ?>



