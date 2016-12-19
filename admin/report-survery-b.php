<?php include('header.php'); ?>
<?php include('function/form_navigator.php'); ?>



<?php
$sql1 = " select * from tbl_survey where id = '" . $_GET['id_survey'] . "'";
$query1 = mysql_query($sql1);
$main1 = mysql_fetch_array($query1);


$sql2 = " select * from tbl_survey_sub where id = '" . $_GET['id_survey_sub'] . "'";
$query2 = mysql_query($sql2);
$main2 = mysql_fetch_array($query2);

$tab["nav1"]["th"] = "ข้อมูลการติดต่อ";
$tab["nav1"]["en"] = "ข้อมูลการติดต่อ";
$tab["nav2"]["th"] = "แบบสำรวจ";
$tab["nav2"]["en"] = "แบบสำรวจ";
$tab["nav3"]["th"] = (strlen($main1['title_th']) > 50) ? mb_substr($main1['title_th'], 0, 50, 'utf-8') . '...' : $main1['title_th'];
$tab["nav3"]["en"] = (strlen($main1['title_en']) > 50) ? mb_substr($main1['title_en'], 0, 50, 'utf-8') . '...' : $main1['title_en'];
$tab["nav4"]["th"] = (strlen($main2['title_th']) > 50) ? mb_substr($main2['title_th'], 0, 50, 'utf-8') . '...' : $main2['title_th'];


$link_tab["nav1"]["th"] = "contact.php";
$link_tab["nav2"]["th"] = "survey.php";
$link_tab["nav3"]["th"] = "survey_sub.php?id=" . $main1['id'];
$link_tab["nav4"]["th"] = "#";


if($main1['type']==2){
    $report_detail = "report-detail-a.php"; // 54321
}else{
    $report_detail = "report-detail-b.php"; // yesno
}


$choise = array();
$sqlAns = "select id_survey_issue_sub, sum(choise1) as choise1, sum(choise2) as choise2, sum(choise3) as choise3,
                sum(choise4) as choise4, sum(choise5) as choise5, date(create_date) as create_date
                from tbl_survey_issue_answer where id_survey_sub = '" . $_GET['id_survey_sub'] . "'  group by id_survey_sub";
$queryAns = mysql_query($sqlAns);
$ans = mysql_fetch_array($queryAns);
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
        <div class="col-md-3">จำนวนผู้เข้าร่วมสำรวจทั้งหมด <span id="numsurvey"></span> คน</div>
        <div class="col-md-1">เห็นด้วย</div>
        <div class="col-md-1"><?php echo $ans['choise1'];?></div>
        <div class="col-md-1">ประเด็น</div>
        <div class="col-md-1">ไม่เห็นด้วย</div>
        <div class="col-md-1"><?php echo $ans['choise2'];?></div>
        <div class="col-md-1">ประเด็น</div>
        <div class="col-md-3"></div>
    </div>
    <?php
        if($ans['choise1']==0){
            $div_choise1 = 1;
        }else{
            $div_choise1 = 2;
        }
        if($ans['choise2']==0){
            $div_choise2 = 1;
        }else{
            $div_choise2 = 2;
        }
        $sumchoise = $ans['choise1'] + $ans['choise2'];
    ?>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-1">คิดเป็น</div>
        <div class="col-md-1"><?php echo ($ans['choise1']/ $sumchoise)*100;?></div>
        <div class="col-md-1">เปอร์เซ็น</div>
        <div class="col-md-1">คิดเป็น</div>
        <div class="col-md-1"><?php echo ($ans['choise2']/ $sumchoise)*100;?></div>
        <div class="col-md-1">เปอร์เซ็น</div>
        <div class="col-md-3"></div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-10"><hr style="border-top: 1px solid #CCC"/></div>
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

