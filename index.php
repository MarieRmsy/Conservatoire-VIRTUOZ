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
	// $course = getCourse();
	include("views/v_course.php");
	break;

 case 'inscription' :
	// $course = getCourse();
	include("views/v_inscription.php");
	break;
	
}
include("views/v_main.php") ;

include("views/v_footer.php") ;
?>