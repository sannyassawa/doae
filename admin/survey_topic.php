<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>


<div class="container">
<?php
$array_tab["contactperson"]["th"]="ข้อมูลการติดต่อ";
$array_tab["contactperson"]["en"]="ข้อมูลการติดต่อ";
$array_tab["servay"]["th"]="แบบสำรวจ";
$array_tab["servay"]["en"]="แบบสำรวจ";
$array_tab["OnlinePoll"]["th"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
$array_tab["OnlinePoll"]["en"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
$link["OnlinePoll"]["th"]="contact.php";
$link["OnlinePoll"]["en"]="contact.php";
$link["servay"]["th"]="#";
$link["servay"]["en"]="#";
$link["contactperson"]["th"]="#";
$link["contactperson"]["en"]="#";

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
$tab["OnlinePoll"]["th"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
$tab["OnlinePoll"]["en"]="การสำรวจความคิดเห็นของประชาชน(Online Poll)";
$link_tab["OnlinePoll"]["th"]="#";
$link_tab["OnlinePoll"]["en"]="#";

?>
        <div class="row">
            <div class="col-lg-12">
                <?php form_navigator($tab,$link_tab);?>
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
$sql .= " FROM tbl_survey_issue_sub  ";




        $result = mysql_query($sql);

        while ($row = mysql_fetch_array($result)) {
          echo'  <tr>
            <td id="'.$row["id"].'">'.$row["id"].'</td>
            <td>'.$row["title_th"].'</td>
            <td>';
            if($row["status"]==1){ echo "ใช้งาน";}
            else{
                echo "ไม่ใช้งาน";
            }echo '</td>
           <td> <a href="../admin/Topic_survey.php?id='.$row["id"].'"><h5>แก้ไข</h5></a></td></tr>  ';
        }




?>



        </tbody>

    </table>
            </div>

        </div>
</div>



<? include('footer.php'); ?>
