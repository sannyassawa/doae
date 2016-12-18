<?php include('header.php'); ?>



<!-- Page Content -->
<div class="container">



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
                echo $sql = "select issue.* from tbl_survey_sub s_sub
                            left join tbl_survey_issue issue on s_sub.id = issue.id_survey_sub
                            where s_sub.id = '".$_GET['id_survey_sub']."'";
echo "<br/>-----------------------------<br/>";
                $objQuery = mysql_query($sql);
                while ($row = mysql_fetch_array($objQuery)){




                    ?>
                    <tr>
                        <td class="active" colspan="6"><?php echo $i.'. '.$row['title_th'];?></td>
                    </tr>

                    <?php

                     echo $sqlIssue = "select ans.*, issue_sub.title_th from tbl_survey_issue issue
                                left join tbl_survey_issue_sub issue_sub on issue.id = issue_sub.id_survey_issue
                                left join tbl_survey_issue_answer ans on issue_sub.id = ans.id_survey_issue_sub
                                where issue.id_survey_sub= '".$_GET['id_survey_sub']."' 
                                and issue_sub.id_survey_issue ='".$row['id']."' ";
echo "<br/>---------------------------<br/>";
                    $queryIssue = mysql_query($sqlIssue);
                    while($rs = mysql_fetch_array($queryIssue)){
                        $choise[]

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

</div>
