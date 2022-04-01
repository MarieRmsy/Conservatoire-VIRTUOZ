<?php
if(!isset($_REQUEST['action']))
{
 $action = 'main';
}
else {
 $action = $_REQUEST['action'];
}

include("views/v_header.php") ;

switch($action)
{
 case 'main':
 include("views/v_main.php");
 break;

 case 'course' :
	require_once("modele/dbconnect.php");
	$bdd = connectBDD();
	$getGet = getInstru();
	$get_Course = getCourses();
	include("views/v_course.php");
	break;

 case 'inscription' :
	include("views/v_inscription.php");
	break;
	
}

include("views/v_footer.php") ;
?>