<?php

function connectBDD(){
    try
    {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbname=conservatoire', $username,$password);
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

?>