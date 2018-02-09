
<?php
    //open connection to mysql db
   include('connection.php');
   header('Content-Type: application/json');
   if(isset($_REQUEST['type']) && $_REQUEST['type']=='list') {
// $connection = mysqli_connect("hostname","username","password","db_employee") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
	if($_REQUEST['id'] == 0) {
	if($_REQUEST['last'] == 0) {
    $sql = "select news_id as id,name as title,news_image as img,date as dte from td_news where recent_news=1 order by news_id desc limit 0,10";
	} else {
	$start = $_REQUEST['first'];
	$end = $_REQUEST['last'];
	$sql = "select news_id as id,name as title,news_image as img,date as dte from td_news where recent_news=1 and news_id not between ".$end." and ".$start." order by news_id desc limit 10";
	
	
	}
	} else {
	if($_REQUEST['last'] == 0) {
    $sql = "select news_id as id,name as title,news_image as img,date as dte from td_news where category=".$_REQUEST['id']." order by news_id desc limit 0,10";
	} else {
	$start = $_REQUEST['first'];
	$end = $_REQUEST['last'];
	$sql = "select news_id as id,name as title,news_image as img,date as dte from td_news where category=".$_REQUEST['id']." and news_id not between ".$end." and ".$start." order by news_id desc limit 10";
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

    //close the db connection
   } elseif(isset($_REQUEST['type']) && $_REQUEST['type']=='post') { 
?>

<?php
 $sql1 = "select category as id,name as title,td_news.desc as content,news_image as img,date as dte,reporter_name as reportby,tags as tag from td_news where news_id=".$_REQUEST['id'];
    $result1 = mysql_query($sql1,$con) or die(mysql_error());
	$dat1 = mysql_fetch_assoc($result1);
 $sql12 = 'select news_id as prev from td_news where news_id = (select max(news_id) from td_news where news_id < "'.$_REQUEST['id'].'" and category="'.$dat1['id'].'")';
    $result12 = mysql_query($sql12,$con) or die(mysql_error());
	$dat12 = mysql_fetch_assoc($result12);
 $sql13 = 'select news_id as next from td_news where news_id = (select min(news_id) from td_news where news_id > "'.$_REQUEST['id'].'" and category="'.$dat1['id'].'")';
    $result13 = mysql_query($sql13,$con) or die(mysql_error());
	$dat13 = mysql_fetch_assoc($result13);		
    //create an array
    $emparray1 = array();
	$emparray1p = array();
	$emparray1n = array();
  // $emparray1p[] = $dat12['prev'] ;
  // $emparray1n[] = $dat13['next'] ;
  $dat1['prev']=$dat12['prev'];
		$dat1['next']=$dat13['next'];
   $emparrayn[] = $dat1;
   
        //$emparray1[] = array_merge($emparray1p,$emparray1n,$emparrayn);
		
		//$emparray1[]=$emparrayn;
   
	header('Content-type: application/json');
    echo json_encode($emparrayn);
	
   } else { 
    $sql2 = "select news_id as id,name as title,td_news.desc as content,news_image as img,date as dte from td_news where news_id not in(".$_REQUEST['id'].") and category=".$_REQUEST['category']." order by news_id asc limit 10";
    $result2 = mysql_query($sql2,$con) or die(mysql_error());
	$dat2 = mysql_fetch_assoc($result2);
    //create an array
    $emparray2 = array();
   do{
        $emparray2[] = $dat2;
    } while($dat2 = mysql_fetch_assoc($result2));
	header('Content-type: application/json');
    echo json_encode($emparray2);
   }?>
