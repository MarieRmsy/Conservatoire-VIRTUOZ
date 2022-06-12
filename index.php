<?php
require_once("modele/dbconnect.php");
require_once("modele/userMod.php");
require_once("modele/coursMod.php");
require_once("modele/instruMod.php");
require_once("modele/profMod.php");
require_once("modele/inscriptionSiteMod.php");

$bdd = connectBDD();

if(!isset($_REQUEST['action']))
{
 $action = 'main';
}
else {
 $action = $_REQUEST['action'];
}

$userModel = new User;

if( isset($_SESSION['user_id']) )
{
	$userData = $userModel->getUserById($bdd, $_SESSION['user_id']);
} else {
	$userData['rank'] = 'none';
}

include("views/v_header.php") ;


switch($action)
{
	
 case 'main':
 include("views/v_main.php");
 break;

// COURS
 case 'course' :
	$coursModele = new Cours;
	$getCours = $coursModele->get($bdd);
	// var_dump($getCours);
	// die;

	$getGet = getInstru();
	include("views/v_course.php");
	break;

// INSCRIPTION
 case 'inscriptionSite' :

	include("views/v_inscriptionSite.php");
	break;

// CONNEXION
 case 'connexion' :
	include("views/v_connexion.php");
	break;

// USER
 case 'user' :
	// $userModel = new User;

	// Vérifier que la session existe
	if( !isset($_SESSION['user_id']) )
	{
		header('location: index.php?action=connexion');
		die;
	}

	// Vérifier que la session existe
	if( $userData === false )
	{
		header('location: index.php?action=connexion');
		die;
	}

	$getUsers = getAdherent();

	include("views/v_user.php");
	break;

// USER COURS
 case 'userCourses' :
	if( !isset($_SESSION['user_id']))
	{
		header('location: index.php?action=connexion');
		die;
	}

	if( $userData['rank'] != "user" )
	{
		header('location: index.php?action=user');
		die;
	}

	$inscriptionSiteModel = new Inscriptions;
	$getInscriptions = $inscriptionSiteModel->get($bdd, $userData['id']);

	include("views/v_userCourses.php");
	break;

// ADMIN
 case 'admin' :
	if( !isset($_SESSION['user_id']) and $userData['rank'] != "admin" )
	{
		header('location: index.php?action=connexion');
		die;
	}

	include("views/admin/v_admin.php");
	break;

// ADMIN COURS
 case 'adminCourses' :
	if( !isset($_SESSION['user_id']) or $userData['rank'] != "admin" )
	{
		header('location: index.php?action=connexion');
		die;
	}

	$coursModele = new Cours;
	$getCours = $coursModele->get($bdd);

	$instruMod = new Instruments;
	$getInstru = $instruMod->get($bdd);

	$profMod = new Professeur;
	$getProf = $profMod->get($bdd);

	include("views/admin/v_adminCourses.php");
	break;
	
// ADMIN INSCRIPTIONS 
 case 'adminInscriptions' :
	if( !isset($_SESSION['user_id']) or $userData['rank'] != "admin" )
	{
		header('location: index.php?action=connexion');
		die;
	}

	$inscriptionSiteModel = new Inscriptions;
	$getInscriptions = $inscriptionSiteModel->get($bdd);

	include("views/admin/v_adminInscriptions.php");
	break;

// ADMIN MEMBRES
 case 'adminUsers' :
	if( !isset($_SESSION['user_id']) or $userData['rank'] != "admin" )
	{
		header('location: index.php?action=connexion');
		die;
	}

	$getUsers = getAdherent();

	include("views/admin/v_adminUsers.php");
	break;

// DECONNEXION
 case 'logout' :
	session_destroy();
	header('location: index.php?action=connexion');
	break;

	default :
	header('location: index.php');
	break;
}

include("views/v_footer.php") ;
?>