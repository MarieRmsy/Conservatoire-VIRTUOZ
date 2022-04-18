<?php
require_once("modele/dbconnect.php");
require_once("modele/userMod.php");

$bdd = connectBDD();

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
	require_once("modele/coursMod.php");
	$coursModele = new Cours;
	$getCours = $coursModele->get($bdd);
	// var_dump($getCours);
	// die;

	$getGet = getInstru();
	include("views/v_course.php");
	break;

 case 'inscription' :
	include("views/v_inscription.php");
	break;

 case 'test' :
	$user = new User;
	var_dump($user->add($bdd,'yame','prenom','06969669','paris','test@gmail.com'));
	break;
	
}

include("views/v_footer.php") ;
?>