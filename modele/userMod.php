<?php


class User
{
    public function add(object $bdd, string $nom, string $prenom, string $tel, string $adresse, string $mail)
    {
        // Verification du mail
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
        {
            return false;
        }

        // Creer compte utilisateur
        $req_addUser = $bdd->prepare('INSERT INTO adherent(nom,prenom,tel,adresse,mail) VALUES(?,?,?,?,?)');
        if ($req_addUser->execute([$nom,$prenom,$tel,$adresse,$mail]))
        {
            return true;
        }
        else 
        {
            return false;
        }

    }
}
