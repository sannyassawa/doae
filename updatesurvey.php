<?php 
require_once('inc/connectDB.php');
header("Content-Type: text/html; charset=utf-8");

//print_r($_POST);

$comment = $_POST["comment"];

$servay = array();
$id_survey_issue_sub = array();
$i=0;
foreach($_POST as $key => $value){
    if(strcmp($key,"submit")==0 || strcmp($key,"comment")==0) {
continue;
    }else if(strcmp($key,"id_survey_sub")==0){

$id_survey_sub = $value;
    }
    else{

        $id_survey_issue_sub[$i]=$key;
        $servay[$i]=$value;
       // echo $key;
        //echo $value . "<br>";
        $i++;
    }
}

$sql = " SELECT MAX(round) AS MaxID ";
$sql .= " FROM tbl_survey_issue_answer  ";
//echo $sql;
if (mysql_query($sql,$conn)) {
    $result = mysql_query($sql, $conn);
    $row = mysql_fetch_array($result);
    $round = $row['MaxID'];
    $round=$round+1;
}
else{
  // echo "out round";
    $round=1;
}
//echo "round is ".$round;
$today = date("Y-m-d H:i:s");
for($index = 0 ; $index < sizeof($id_survey_issue_sub);$index++) {

    $sql = " INSERT  INTO tbl_survey_issue_answer
					 ( id_survey_issue_sub, id_survey_sub, choise1,choise2,choise3,choise4,choise5,round, create_date, description ) ";
    $sql .= " VALUES ";
    if($servay[$index]==5) {
        //echo "5 is ".$servay[$index];
        $sql .= "( $id_survey_issue_sub[$index], $id_survey_sub, 0, 0, 0, 0, 1, $round, '$today', '".$comment."')";
    }
    else if($servay[$index]==4){
        //echo "4 is ".$servay[$index];
        $sql .= "( $id_survey_issue_sub[$index], $id_survey_sub, 0, 0, 0, 1, 0, $round, '$today', '".$comment."')";

    }
    else if($servay[$index]==3){
        //echo "3 is ".$servay[$index];
        $sql .= "( $id_survey_issue_sub[$index], $id_survey_sub, 0, 0, 1, 0, 0, $round, '$today', '".$comment."')";
    }
    else if($servay[$index]==2){
       // echo "2 is ".$servay[$index];
        $sql .= "( $id_survey_issue_sub[$index], $id_survey_sub, 0, 1, 0, 0, 0, $round, '$today', '".$comment."')";
    }
    else{
        //echo "1 is ".$servay[$index];
        $sql .= "( $id_survey_issue_sub[$index], $id_survey_sub, 1, 0, 0, 0, 0, $round, '$today', '".$comment."')";
    }

        if (mysql_query($sql, $conn)) {



        }
        else{

        }

}

header('Location: ../doae/survey.php');

//mysql_close($conn);

//ob_end_flush();

/*
$sql = " SELECT MAX(article_id) AS MaxID ";
$sql .= " FROM t_article  ";

if ($queryOK) {
    if (!mysql_query($sql,$conn)) {
        $queryOK = false;
    }
    else {
        $result = mysql_query($sql, $conn);
        $row = mysql_fetch_array($result);
        $MaxID = $row['MaxID'];

    }
}
*/


?>