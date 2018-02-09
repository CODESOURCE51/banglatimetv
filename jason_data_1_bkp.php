<?php
    //open connection to mysql db
   include('connection.php');
   header('Content-Type: application/json');
   $last = $_REQUEST['last'];
   if($_REQUEST['id'] == 0) {
	   switch ($last) {
    case 0:
       $sql = "select news_id as id,name as title,news_image as img,DATE_FORMAT(date, '%d-%m-%Y') as dte from td_news where recent_news=1 order by news_id desc limit 0,10";
        break;    
    default:
      $start = $_REQUEST['first'];
	$end = $_REQUEST['last'];
	$sql = "select news_id as id,name as title,news_image as img,DATE_FORMAT(date, '%d-%m-%Y') as dte from td_news where recent_news=1 and news_id not between ".$end." and ".$start." order by news_id desc limit 10";
}
	} else {
		 switch ($last) {
    case 0:
       $sql = "select news_id as id,name as title,news_image as img,DATE_FORMAT(date, '%d-%m-%Y') as dte from td_news where category=".$_REQUEST['id']." order by news_id desc limit 0,10";
        break;    
    default:
     $start = $_REQUEST['first'];
	$end = $_REQUEST['last'];
	$sql = "select news_id as id,name as title,news_image as img,DATE_FORMAT(date, '%d-%m-%Y') as dte from td_news where category=".$_REQUEST['id']." and news_id not between ".$end." and ".$start." order by news_id desc limit 10";
}
	}
	 $result = mysql_query($sql,$con) or die(mysql_error());
	$dat = mysql_fetch_assoc($result);
    //create an array
    $emparray = array();
   do{
        $emparray[] = $dat;
    } while($dat = mysql_fetch_assoc($result));
	header('Content-type: application/json');
    
    echo json_encode($emparray);