<?php


class User
{
    public function add(object $bdd, string $nom, string $prenom, string $tel, string $adresse, string $mail, string $mdp)
    {
        // Verification du mail
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
        {
            return false;
        }

        $mdp = password_hash($mdp,PASSWORD_DEFAULT);

        // Vérifier sur l'utilsiateur existe déjà
        $checkIfEmailExist = $bdd->prepare("SELECT * FROM adherent WHERE mail=:mail");
        $checkIfEmailExist->bindParam('mail', $mail);
        $checkIfEmailExist->execute();
        $result = $checkIfEmailExist->fetchAll();

        if(count($result) > 0)
        {
            return false;
        }

        // Creer compte utilisateur
        $req_addUser = $bdd->prepare('INSERT INTO adherent(nom,prenom,tel,adresse,mail,mdp) VALUES(?,?,?,?,?,?)');
        if ( $req_addUser->execute([$nom,$prenom,$tel,$adresse,$mail,$mdp]) )
        {
            return true;
        }
        else 
        {
            return false;
        }

    }

    public function login($bdd, $mail, $mdp)
    {
        // Récupérer les données de l'utilsiateur ayant l'email choisi
        $checkIfEmailExist = $bdd->prepare("SELECT * FROM adherent WHERE mail=:mail");
        $checkIfEmailExist->bindParam('mail', $mail);
        $checkIfEmailExist->execute();
        $userTested = $checkIfEmailExist->fetchAll();

        // Vérifier qu'il existe bien à utilisateur avec cet email
        if(count($userTested) == 1)
        {
            // Si nous avons bien un utilisateur et un seul, on vérifie le mot de passe
            if( password_verify($mdp, $userTested[0]['mdp']) )
            {
                return $userTested[0];
            }
            else
            {
                return false;
            }
        }
        else{
            // Sinon, on return false
            return false;
        }

    }

    public function getUserById($bdd, $userId)
    {
        // Récupérer les données de l'utilsiateur ayant un ID précis
        $searchUser = $bdd->prepare("SELECT * FROM adherent WHERE id=:id");
        $searchUser->bindParam('id', $userId);
        $searchUser->execute();
        $userTested = $searchUser->fetchAll();

        if(count($userTested) === 1)
        {
            return $userTested[0];
        }
        else
        {
            return false;
        }
    }


}
