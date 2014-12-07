<?php

include("database/addlocation_db.php");

if($_REQUEST['COMMAND']=='insert'){

$movieid=$_REQUEST['location'];
$_SESSION[movieid]=$_REQUEST['location'];

$moviename=$_REQUEST['destination'];
$_SESSION[moviename]=$_REQUEST['destination'];

}
?>
