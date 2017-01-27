<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php
$id_survey = $_GET['id_survey'];
$id_survey_sub = $_GET['id_survey_sub'];

$sql = " select * from tbl_survey where id = '".$id_survey."'";
$query = mysql_query($sql);
$main1 = mysql_fetch_array($query);

$sql = " select * from tbl_survey_sub where id = '".$id_survey_sub."'";
$query = mysql_query($sql);
$main2 = mysql_fetch_array($query);


$tab["nav1"]["th"] = "ข้อมูลการติดต่อ";
$tab["nav1"]["en"] = "ข้อมูลการติดต่อ";
$tab["nav2"]["th"] = "แบบสำรวจ";
$tab["nav2"]["en"] = "แบบสำรวจ";
$tab["nav3"]["th"] = (strlen($main1['title_th']) > 50) ? mb_substr($main1['title_th'], 0, 50, 'utf-8') . '...' : $main1['title_th'];
$tab["nav3"]["en"] = (strlen($main1['title_en']) > 50) ? mb_substr($main1['title_en'], 0, 50, 'utf-8') . '...' : $main1['title_en'];
$tab["nav4"]["th"] = (strlen($main2['title_th']) > 50) ? mb_substr($main2['title_th'], 0, 50, 'utf-8') . '...' : $main2['title_th'];
$tab["nav4"]["en"] = (strlen($main2['title_en']) > 50) ? mb_substr($main2['title_en'], 0, 50, 'utf-8') . '...' : $main2['title_en'];

$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";
$link_tab["nav3"]["th"]="survey_sub.php?id=$id_survey";

form_navigator($array_tab, $link, $addtext, $addlink);


if($main1['type']==2){
    $report_detail = "report-detail-a.php"; // 54321
}else{
    $report_detail = "report-detail-b.php"; // yesno
}


$sqlAns1 = "select id_survey_issue_sub, sum(choise1) as choise1, sum(choise2) as choise2 "
				.",sum(choise3) as choise3, sum(choise4) as choise4, sum(choise5) as choise5 "
				."from tbl_survey_issue_answer ans "
				."where id_survey_sub = '$id_survey_sub'  group by id_survey_issue_sub";
			
$queryAns1 = mysql_query($sqlAns1);
while($ans = mysql_fetch_array($queryAns1)) {

    $choise[$ans['id_survey_issue_sub']]['choise1'] = $ans['choise1'];
    $choise[$ans['id_survey_issue_sub']]['choise2'] = $ans['choise2'];
}
?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>

    <div class="row">
        <br/>
        <div class="col-md-12">สรุปผลจากการสำรวจ</div>
    </div>





    <div class="row">
        <div class="col-md-12">จำนวนผู้เข้าร่วมสำรวจทั้งหมด <span id="numsurvey"></span> คน</div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-10"><hr style="border-top: 1px solid #CCC"/></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table table-bordered" id="report-survey">
                <tr>
                    <th>หัวข้อการประเมิน</th>
                    <th class="center">เห็นด้วย</th>
                    <th class="center">ไม่เห็นด้วย</th>
                    <th class="center">ข้อเสนอแนะ</th>
                </tr>
                <?php
                $i = 1;
                $j = 1;
                $sql = "select issue.* from tbl_survey_sub s_sub
                        left join tbl_survey_issue issue on s_sub.id = issue.id_survey_sub
                        where issue.id_survey_sub = '" . $id_survey_sub . "'";

                $objQuery = mysql_query($sql);
                while ($row = mysql_fetch_array($objQuery)) {


                    ?>
                    <tr>
                        <td class="active" colspan="6"><?php echo $i . '. ' . $row['title_th']; ?></td>
                    </tr>

                    <?php

                     $sqlIssue = "SELECT * FROM tbl_survey_issue_sub where id_survey_issue = '" . $row['id'] . "'";

                    $queryIssue = mysql_query($sqlIssue);
                    while ($rs = mysql_fetch_array($queryIssue)) {


                        ?>


                        <tr>
                            <td><?php echo $i . '.' . $j . '. ' . $rs['title_th']; ?></td>
                            <td class="center"><?php echo $choise[$rs['id']]['choise1']; ?></td>
                            <td class="center"><?php echo $choise[$rs['id']]['choise2']; ?></td>
                            <td class="center"></td>
                        </tr>

                        <?php

                        $j++;
                    }
                    $j = 1;
                    $i++;
                } ?>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>


    <!-- ---------------------------------  show by date  ---------------------------------------------------->

    <div class="row">
        <div class="col-md-12">ผลจากการสำรวจ</div>
    </div>

    <div class="row">
        <br/><br/>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th class="active center">วันที่</th>
                    <th class="active center">จำนวนผู้เข้าร่วม</th>
                    <th class="active center">รายละเอียดแบบสำรวจ</th>
                </tr>
                <?php
                $sqlsum = "select  date(ans.create_date) as create_date 
                                    from tbl_survey_issue issue 
                                    left join tbl_survey_issue_sub issue_sub on issue.id = issue_sub.id_survey_issue 
                                    left join tbl_survey_issue_answer ans on issue_sub.id = ans.id_survey_issue_sub 
                                    where issue.id_survey_sub= '" . $_GET['id_survey_sub'] . "' and ans.id_survey_issue_sub != ''
                                    group by date(ans.create_date), ans.round";

                $querysum = mysql_query($sqlsum);
                //                    $numrow = mysql_num_rows($querysum);
                $round = array();
                while ($data = mysql_fetch_array($querysum)) {
                    $count[$data['create_date']] += 1;
                }

                if (is_array($count)) {
                    foreach ($count as $date => $round) {

                        ?>
                        <tr>
                            <td class="center"><?php echo $date; ?></td>
                            <td class="center"><?php echo $round; ?></td>
                            <td class="center">
                                <a href="<?php echo $report_detail;?>?id_survey_sub=<?php echo $_GET['id_survey_sub']; ?>&date=<?php echo $date; ?>"
                                   class="fancybox">ดูรายละเอียด</a></td>
                        </tr>
                    <?php  $sumtotal += $round;     }
                } ?>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>


<? include('footer.php'); ?>
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen"/>

<script>
    $(document).ready(function () {
        $("#numsurvey").html('<?php echo $sumtotal;?>');
        $(".fancybox").fancybox({type: 'ajax'});
    });
</script>

