<?php include('header.php'); ?>
<?php
header('Content-Type: text/html; charset=utf-8');
$data = "<?xml version='1.0' encoding='UTF-8'?>"."\n";
$data .="<rss version='2.0'>\n";

$data .="<channel>"."\n";

$data .="<title>ข่าวประชาสัมพันธ์</title>"."\n";
$data .="<description>รายละเอียดของเว็บเรา</description>"."\n";
$data .="<link>https://61.91.124.154/doae2</link>"."\n";


/*
        $select_db = mysql_select_db(“fdliteco_phpbb”);
        mysql_query(“SET character_set_results=utf8”);
        mysql_query(“SET character_set_client=utf8”);
        mysql_query(“SET character_set_connection=utf8”);
*/
/*             if($row['cat_news_id'] == 1){
  echo "<li class='active'>";
}else{
  echo "<li class=''>";
}
echo "	<a href='#News-".$row['cat_news_id']."' data-toggle='tab'>
                                  <span class='en'>".$row['name_en']."</span>
                                  <span class='th'>".$row['name']."</span>
                              </a>
                          </li>
                      ";
*/
$sql = "SELECT * FROM t_news INNER JOIN t_news_cat ON t_news_cat.cat_news_id = t_news.cat_news_id WHERE t_news.active = 1";
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8_unicode_ci");
mysql_query("collation_database = utf8_unicode_ci");
mysql_query("collation_server = utf8_unicode_ci");
$data7  = mysql_query($sql);

$data2="";
while ($row = mysql_fetch_array($data7)) {
    $data2 .= '<item>'."\n";
    $data2 .= '<categories>'.$row["name"].'</categories>'."\n";
    $data2 .= '<title>'.$row["title"].'</title>'."\n";
    $data2 .= '<description>'.iconv( 'UTF-8' , 'TIS-620' ,utf8_encode(html_entity_decode($row["content"]))).'</description>'."\n";
    //$link = "t=".$row_hotnews['topic_id'];
    $data2 .= '<link>http://61.91.124.154/doae2/news_detail.php?id='.$row["news_id"].'</link>'."\n";
    $data2 .= '<pubDate>'.$row["update_date"].'</pubDate>'."\n";
    $data2 .= '</item>'."\n";


}


$data .= $data2;
$data .="</channel>"."\n";
$data .="</rss>"."\n";
echo $data;
$f = fopen( 'rss.xml' , 'w' );
fputs( $f , $data );
fclose( $f );
header('Location: '."/doae2/rss.xml");

?>