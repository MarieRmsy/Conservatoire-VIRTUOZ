<?php
require_once("modele/dbconnect.php");
require_once("modele/userMod.php");
require_once("modele/coursMod.php");

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

case 'connexion' :
	include("views/v_connexion.php");
	break;

case 'me' :
	$userModel = new User;

	// Vérifier que la session existe
	if( !isset($_SESSION['user_id']) )
	{
		header('location: index.php?action=connexion');
		die;
	}

	$userData = $userModel->getUserById($bdd, $_SESSION['user_id']);

	// Vérifier que la session existe
	if( $userData === false )
	{
		header('location: index.php?action=connexion');
		die;
	}

	include("views/v_me.php");
	break;

case 'logout' :
	session_destroy();
	header('location: index.php?action=connexion');
	break;

 case 'test' :
	break;
	
}

include("views/v_footer.php") ;
?>