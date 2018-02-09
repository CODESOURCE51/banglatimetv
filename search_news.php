<?php
include('connection.php');
$news_id = $_REQUEST['news_id'];
$bnk_sql = 'SELECT * FROM td_news WHERE news_id='.$news_id;
$q_bank = mysql_query($bnk_sql, $con) or die(mysql_error());
$f_bnk = mysql_fetch_assoc($q_bank);
$length = strlen($f_bnk['name']);
if($length > 36) {
	$title = mb_substr($f_bnk['name'],0,36,'UTF-8').'..';
}
else {
	$title = $f_bnk['name'];
}
$description = mb_substr($f_bnk['desc'],0,400,'UTF-8').'..';
echo $title.'='.$description.'='.$f_bnk['news_image'];

?>