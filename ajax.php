<?php
// Ajout des fichiers de configurations et des class
require_once("modele/dbconnect.php");
require_once("modele/userMod.php");

// Connexion à la BDD
$bdd = connectBDD();
$bdd->exec("set names utf8mb4");

// REQUETE AJAX INSCRIPTION
header('Content-Type: application/json');

if( isset($_POST['do']) && $_POST['do'] == "register")
{
    $user = new User;
    if( $user->add($bdd, $_POST['formLastnameRegister'], $_POST['formFirstnameRegister'], $_POST['formPhoneRegister'], $_POST['formAdressRegister'], $_POST['formEmailRegister'],$_POST['formPasswordRegister']) )
    {
        echo json_encode(['state' => "success"]);
    }
    else
    {
        echo json_encode(['state' => "fail"]);
    }
}

if( isset($_POST['do']) && $_POST['do'] == "connect")
{
    $user = new User;
    $getUser = $user->login($bdd, $_POST['formEmailConnect'], $_POST['formPasswordConnect']);
    if( $getUser != false )
    {
        $_SESSION['user_id'] = $getUser['id'];
        echo json_encode(['state' => "success"]);
    }
    else
    {
        echo json_encode(['state' => "fail"]);
    }
}