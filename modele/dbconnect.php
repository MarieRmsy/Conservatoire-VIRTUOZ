<?php

session_start();

function connectBDD(){
    try
    {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbname=virtuoz', $username,$password);

        // $username = "mariermadmin";
        // $password = "fy0xn1OT5GF9XU00YROcNtzq7p2d6O";
        // $dbh = new PDO('mysql:host=mariermadmin.mysql.db;dbname=mariermadmin', $username,$password);
                
        $dbh->exec('SET NAMES utf8');
        return ($dbh);
    }
    catch(PDOException $err)
    {
        print "Error ! :".$err->getMessage()."<br/>";
        die();
    }

}

function getCourses(){
    $req = "SELECT id, date, nbPlace, idProf, idInstru FROM cours
    INNER JOIN professeur ON cours.idProf = professeur.profId
    INNER JOIN instrument ON cours.idInstru = instrument.instruId";

    $exe = connectBDD()->prepare($req);
    $exe->execute();
    $getCours = $exe->fetchAll();
    return ($getCours);

}

function getInstru(){
    $req = "SELECT instruNum, instruId FROM instrument";

    $exe = connectBDD()->prepare($req);
    $exe->execute();
    $getInstru = $exe->fetchAll();
    return ($getInstru);

}

function getAdherent(){
    $req = "SELECT id, nom, prenom, mail, tel, adresse, rank FROM utilisateur";

    $exe = connectBDD()->prepare($req);
    $exe->execute();
    $getAdherent = $exe->fetchAll();
    return ($getAdherent);

}

function getPdfInscription(object $bdd, int $idAdh, int $idCours){

    $req = "SELECT c.id as id, c.date as date, p.profNom as profNom, p.profPrenom as profPrenom, it.instruNom as instru, u.nom as nom, u.prenom as prenom FROM inscription i INNER JOIN cours c on i.idCours = c.id INNER JOIN professeur p on p.profId = c.idProf INNER JOIN instrument it on it.instruId = c.idInstru INNER JOIN utilisateur u on u.id = i.idAdh WHERE i.idAdh =" . $idAdh . " and i.idCours =" . $idCours . ";";
    $inscriptionPdf = array();

    // Récupérer l'inscription précise
    $searchInsc = $bdd->prepare($req);
    $searchInsc->execute();
    $inscriptionPdf = $searchInsc->fetchAll();
    return ($inscriptionPdf);


}


?>