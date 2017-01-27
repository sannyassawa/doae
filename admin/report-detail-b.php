<?php include('header-report-survey.php'); ?>

<?php
$id_survey = $_GET['id_survey'];
$id_survey_sub = $_GET['id_survey_sub'];
$choise = array();
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
        <br/><br/>
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <table class="table table-bordered" id="report-survey">
                <tr>
                    <th>หัวข้อการประเมิน</th>
                    <th style="width:100px;" class="center">เห็นด้วย</th>
                    <th style="width:100px;" class="center">ไม่เห็นด้วย</th>
                    <th class="center">ข้อเสนอแนะ</th>

                </tr>
                <?php

                $i = 1;
                $j = 1;
                $sql = "select issue.* from tbl_survey_sub s_sub
                        left join tbl_survey_issue issue on s_sub.id = issue.id_survey_sub
                        where s_sub.id = '" . $_GET['id_survey_sub'] . "'";

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
                            $sumchoise = $perChoise1 = $perChoise2 = 0;
                            $sumchoise = $choise[$rs['id']]['choise1'] + $choise[$rs['id']]['choise2'];
                            $perChoise1 = number_format( ($choise[$rs['id']]['choise1']/$sumchoise)*100,2);
                            $perChoise2 = number_format( ($choise[$rs['id']]['choise2']/$sumchoise)*100,2);
                        ?>


                        <tr>
                            <td><?php echo $i . '.' . $j . '. ' . $rs['title_th']; ?></td>
                            <td class="center"><?php echo "(".$perChoise1."%)"; ?></td>
                            <td class="center"><?php echo "(".$perChoise2."%)"; ?></td>
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

</div>
