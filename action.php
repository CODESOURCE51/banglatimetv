<?php
/**
 * Created by IntelliJ IDEA.
 * User: bob005
 * Date: 31-05-16
 * Time: 14.24
 */
$con = mysqli_connect('localhost', 'banglat8_time123', 'bangla@tv2015') or die(mysqli_error($con));
mysqli_select_db($con, 'banglat8_timetv') or die(mysqli_error($con));
   
$device=$_POST['device'];
$action=$_POST['action'];
if($action=='1')
{
$chk_device=mysqli_num_rows(mysqli_query($con,"select * from `gcm_recepient` where device='".$_POST['device']."'")) ;
if($chk_device==0) {
    $query = "INSERT INTO `gcm_recepient` (`device`,`time`) VALUES('$device',".time().")";
    $query_exi = mysqli_query($con,$query) or die(mysqli_error($con));
}
else
{
$query= "UPDATE `gcm_recepient` SET device='".$_POST['device']."',time='".time()."' WHERE device='".$_POST['device']."'";
$query_exi= mysqli_query($con,$query) or die(mysqli_error($con));
}
}
