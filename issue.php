<?php include('header.php'); ?>
<?php include('admin/function/form_navigator.php'); ?>



<?php


$sql = "select survey.* from tbl_survey survey
left join tbl_survey_sub s_sub on survey.id = s_sub.id_survey
left join tbl_survey_issue issue on s_sub.id = issue.id_survey_sub
left join tbl_survey_issue_sub issue_sub on issue.id = issue_sub.id_survey_issue
where s_sub.id = ".$_GET['id_survey_sub']." LIMIT 0,1";



    $query = mysql_query($sql);
    $main = mysql_fetch_array($query);

 //echo $main["type"];


$tab["nav1"]["th"]="ข้อมูลการติดต่อ";
$tab["nav1"]["en"]="ข้อมูลการติดต่อ";
$tab["nav2"]["th"]="แบบสำรวจ";
$tab["nav2"]["en"]="แบบสำรวจ";
$tab["nav3"]["th"]= $main['title_th'];
$tab["nav3"]["en"]= $main['title_en'];



$link_tab["nav1"]["th"]="contact.php";
$link_tab["nav2"]["th"]="survey.php";

?>


<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php  form_navigator($tab, $link_tab, $addtext, $addlink); ?>
    </div>
<?php      if($main["type"]==2){?>
    <div class="row">
        <form  name="myform" id="myform" method="POST" action="updatesurvey.php" >
            <input type="hidden" name="id_survey_sub" id="id_survey_sub" value="<?php echo $_GET['id_survey_sub'] ?>">
            <input type="hidden" name="type" id="type" value="<?php echo $main["type"] ?>">
        <table id="survey" class="table">
            <tr>
                <th>หัวข้อการประเมิน</th>
                <th>น้อยที่สุด</th>
                <th>ค่อนข้างน้อย</th>
                <th>ปานกลาง</th>
                <th>มาก</th>
                <th>มากที่สุด</th>
            </tr>

            <?php
            $sql = " select * from tbl_survey_issue where id_survey_sub = '".$_GET['id_survey_sub']."' AND status = 1  ";
            $objQuery = mysql_query($sql);
            while ($row = mysql_fetch_array($objQuery)) {



                echo "<tr>
                        <td colspan='6'>".$row['title_th']."</td>
                            
                    </tr>";
                $sql1 = " select * from tbl_survey_issue_sub where id_survey_issue = '".$row['id']."' AND status = 1  ";
                $result = mysql_query($sql1);
            while ($row1 = mysql_fetch_array($result)) {

                echo "  
                        
                        <tr>
                        <td >".$row1['title_th']."</td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='1'></td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='2'></td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='3'></td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='5'></td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='5'></td>
                    </tr>";

                }
            }
            ?>

        </table>

    </div>
   <center> <input type="submit" name = "submit" id = "submit" value="ส่ง" ></center>
    </form>
    <?php }else{?>

    <div class="row">
        <form  name="myform" id="myform" method="POST" action="updatesurvey.php" >
            <input type="hidden" name="id_survey_sub" id="id_survey_sub" value="<?php echo $_GET['id_survey_sub'] ?>">
          
            <table id="survey" class="table">
                <tr>
                    <th>หัวข้อการประเมิน</th>
                    <th>เห็นด้วย</th>
                    <th>ไม่เห็นด้วย</th>

                </tr>
                <?php
                $sql = " select * from tbl_survey_issue where id_survey_sub = '".$_GET['id_survey_sub']."' AND status = 1  ";
                $objQuery = mysql_query($sql);
                while ($row = mysql_fetch_array($objQuery)) {



                    echo "<tr>
                        <td colspan='6' bgcolor='gray'>".$row['title_th']."</td>
                            
                    </tr>";
                    $sql1 = " select * from tbl_survey_issue_sub where id_survey_issue = '".$row['id']."' AND status = 1  ";
                    $result = mysql_query($sql1);
                    while ($row1 = mysql_fetch_array($result)) {

                        echo "  
                        
                        <tr>
                        <td >".$row1['title_th']."</td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='1'></td>
                          <td ><input required type='radio' id='".$row1["id"]."' name='".$row1["id"]."' value='2'></td>
                          
                    </tr>";

                    }
                }
                ?>
            </table>
            ข้อเสนอแนะ : <textarea rows="4" cols="50" name="comment" form="myform">
            </textarea>

    </div>
    <center> <input type="submit" name = "submit" id = "submit" value="ส่ง" ></center>
    </form>
            <?php
    } ?>
    </div>
</div>


<? include('footer.php'); ?>



