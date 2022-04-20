<?php

session_start();

function connectBDD(){
    try
    {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbname=conservatoire', $username,$password);
        $dbh->exec('SET NAMES utf8');
        return $dbh;
    }
    catch(PDOException $err)
    {
        print "Error ! :".$err->getMessage()."<br/>";
        die();
    }

}

function getCourses(){
    $req = "SELECT * FROM cours
    INNER JOIN professeur ON cours.idProf = professeur.profId
    INNER JOIN instrument ON cours.idInstru = instrument.instruId";

    $exe = connectBDD()->prepare($req);
    $exe->execute();
    $getCours = $exe->fetchAll();
    return $getCours;

}

function getInstru(){
    $req = "SELECT * FROM instrument";

    $exe = connectBDD()->prepare($req);
    $exe->execute();
    $getInstru = $exe->fetchAll();
    return $getInstru;

}

function getAdherent(){
    $req = "SELECT * FROM adherent";

    $exe = connectBDD()->prepare($req);
    $exe->execute();
    $getAdherent = $exe->fetchAll();
    return $getAdherent;

}

?>