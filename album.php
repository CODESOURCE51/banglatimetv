<?php
    //open connection to mysql db
   include('connection.php');
   header('Content-Type: application/json');
   if(isset($_REQUEST['type']) && $_REQUEST['type']=='gallery') {
// $connection = mysqli_connect("hostname","username","password","db_employee") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
	if($_REQUEST['last'] == 0) {
	$sql="SELECT td_album.aid as id,td_album.cover_title as title,td_album.cover_image as img, td_album_images.album_image FROM td_album INNER JOIN td_album_images ON td_album.aid=td_album_images.album_id ORDER BY td_album.aid desc limit 0,5";
	//$sql = "select * from td_album,td_album_images where td_album_images.album_id = td_album.aid";
   $sql = "select aid as id,cover_title as title,cover_image as img,date as dte from td_album order by aid desc limit 0,5";
	} else {
	$start = $_REQUEST['first'];
	$end = $_REQUEST['last'];
	$sql = "select aid as id,cover_title as title,cover_image as img,date as dte from td_album where aid not between ".$end." and ".$start." order by aid desc limit 5";
	
	
	}
	
   $result = mysql_query($sql,$con) or die(mysql_error());
	$dat = mysql_fetch_assoc($result);
    //create an array
    $emparray = array();
   do{
	   
	  $alImg = mysql_fetch_array(mysql_query("SELECT album_image as subimg FROM td_album_images WHERE album_id=".$dat['id']));
       
		 $emparray1[] = $alImg;
		  $emparray2[] = $dat;
		   $emparray[] = array_merge($emparray2,$emparray1);
    } while($dat = mysql_fetch_assoc($result));
    //print_r($emparray);
    echo json_encode($emparray);
	//echo json_encode($emparray1);
   }
	?>