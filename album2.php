<?php
//open connection to mysql db
include('connection.php');
header('Content-Type: application/json');
if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'gallery') {
// $connection = mysqli_connect("hostname","username","password","db_employee") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
    if ($_REQUEST['last'] == 0) {
        //$sql="SELECT td_album.aid as id,td_album.cover_title as title,td_album.cover_image as img, td_album_images.album_image FROM td_album LEFT JOIN td_album_images ON td_album.aid=td_album_images.album_id ORDER BY td_album.aid desc limit 0,5";
        $sql = "select aid as id,cover_title as title,cover_image as img,date as dte from td_album order by aid desc limit 0,5";
    } else {
        $start = $_REQUEST['first'];
        $end = $_REQUEST['last'];
        $sql = "select aid as id,cover_title as title,cover_image as img,date as dte from td_album where aid not between " . $end . " and " . $start . " order by aid desc limit 5";
    }
    $final = array();
    $result = mysql_query($sql, $con) or die(mysql_error());
    while($dat = mysql_fetch_array($result)){
        $result2 = mysql_query("SELECT album_image as subimg FROM td_album_images WHERE album_id=" . $dat['id']);
        while($alImg = mysql_fetch_array($result2)) {
            $dat["images"][] = $alImg["subimg"];
        }
        $final[] = $dat;
    }
    echo json_encode($final);
}
if (isset($_REQUEST['type']) && $_REQUEST['type'] == 'video') {
	if($_REQUEST['last'] == 0) {
   $sql = "select vid as id,video as videoid from td_video order by vid desc limit 0,5";
	} else {
	$start = $_REQUEST['first'];
	$end = $_REQUEST['last'];
	$sql = "select vid as id,video as videoid from td_video where vid not between ".$end." and ".$start." order by vid desc limit 5";
	
	
	}
	
   $result = mysql_query($sql,$con) or die(mysql_error());
	$dat = mysql_fetch_assoc($result);
    //create an array
    $emparray = array();
   do{
		  $emparray[] = $dat;
    } while($dat = mysql_fetch_assoc($result));
    //print_r($emparray);
    echo json_encode($emparray);
}
?>