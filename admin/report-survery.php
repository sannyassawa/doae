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
        <div class="col-md-12">จำนวนผู้เข้าร่วมสำรวจทั้งหมด <span id="numsurvey"></span> คน</div>
    </div>

    <div class="row">
        <br/><br/>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table table-bordered" id="report-survey">
                <tr>
                    <th>หัวข้อการประเมิน</th>
                    <th class="center">มากที่สุด</th>
                    <th class="center">มาก</th>
                    <th class="center">ปานกลาง</th>
                    <th class="center">ค่อนข้างน้อย</th>
                    <th class="center">น้อยที่สุด</th>
                </tr>
                <?php
//                    $sql = " select issue.title_th as issue_title, issue_sub.title_th as issue_title_detail from tbl_survey_sub s_sub
//                              left join tbl_survey_issue issue on s_sub.id = issue.id_survey_sub
//                              left join tbl_survey_issue_sub issue_sub on issue.id = issue_sub.id_survey_issue
//                              where s_sub.id = '".$_GET['id_survey_sub']."' order by s_sub.id asc, issue.id asc ";

                    $i=1;
                    $j=1;
                     $sql = "select issue.* from tbl_survey_sub s_sub
                            left join tbl_survey_issue issue on s_sub.id = issue.id_survey_sub
                            where s_sub.id = '".$_GET['id_survey_sub']."'";

                    $objQuery = mysql_query($sql);
                    while ($row = mysql_fetch_array($objQuery)){




                ?>
                <tr>
                    <td class="active" colspan="6"><?php echo $i.'. '.$row['title_th'];?></td>
                </tr>

                <?php

                     $sqlIssue = "select ans.*, issue_sub.title_th from tbl_survey_issue issue
                                left join tbl_survey_issue_sub issue_sub on issue.id = issue_sub.id_survey_issue
                                left join tbl_survey_issue_answer ans on issue_sub.id = ans.id_survey_issue_sub
                                where issue.id_survey_sub= '".$_GET['id_survey']."' and issue_sub.id_survey_issue ='".$row['id']."'";

                    $queryIssue = mysql_query($sqlIssue);
                    while($rs = mysql_fetch_array($queryIssue)){

                ?>



                <tr>
                    <td><?php echo $i.'.'.$j.'. '.$rs['title_th'];?></td>
                    <td class="center"><?php echo $rs['choise1']; ?></td>
                    <td class="center"><?php echo $rs['choise2']; ?></td>
                    <td class="center"><?php echo $rs['choise3']; ?></td>
                    <td class="center"><?php echo $rs['choise4']; ?></td>
                    <td class="center"><?php echo $rs['choise5']; ?></td>
                </tr>

                <?php
                    if($i==1) {
                        $sumtotal = 0;
                        $sumtotal += $rs['choise1'];
                        $sumtotal += $rs['choise2'];
                        $sumtotal += $rs['choise3'];
                        $sumtotal += $rs['choise4'];
                        $sumtotal += $rs['choise5'];
                    }

                        $j++;

                    }
                    $j=1;
                    $i++;
                } ?>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>


<!--    --------------------------------------------------------------------------------------------->
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
                     $sqlsum = "select DISTINCT date(ans.create_date) as create_date, ans.round 
                                    from tbl_survey_issue issue 
                                    left join tbl_survey_issue_sub issue_sub on issue.id = issue_sub.id_survey_issue 
                                    left join tbl_survey_issue_answer ans on issue_sub.id = ans.id_survey_issue_sub 
                                    where issue.id_survey_sub= '".$_GET['id_survey']."' and ans.id_survey_issue_sub != ''
                                    group by date(ans.create_date), ans.round";
                    $querysum = mysql_query($sqlsum);
//                    $numrow = mysql_num_rows($querysum);
                    while($data = mysql_fetch_array($querysum)){

                ?>
                <tr>
                    <td class="center"><?php echo $data['create_date'];?></td>
                    <td class="center"><?php echo $data['round']; ?></td>
                    <td class="center">
        <a href="report-detail.php?id_survey_sub=<?php echo $_GET['id_survey'];?>&date=<?php echo $data['create_date'];?>" class="fancybox">ดูรายละเอียด</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>


<? include('footer.php'); ?>
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<script>
    $(document).ready(function(){
        $("#numsurvey").html('<?php echo $sumtotal;?>');
        $(".fancybox").fancybox({type: 'ajax'});
    });
</script>

