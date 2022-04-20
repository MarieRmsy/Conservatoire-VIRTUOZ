<?php

    class Inscriptions 
    {

        public function add(object $bdd, int $idUser, int $idCours)
        {
            $reqAddRegistration = 'INSERT INTO inscription(idAdh,idCours) VALUES(:user,:cours)';
            $sqlAddRegistration = $bdd->prepare($reqAddRegistration);
            $sqlAddRegistration->bindParam('user', $idUser);
            $sqlAddRegistration->bindParam('cours', $idCours);
            if($sqlAddRegistration->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }

        public function get(object $bdd, int $userid = null)
        {
            if( $userid == null )
            {
                $reqGetInscriptions = 'SELECT * FROM inscription INNER JOIN adherent ON adherent.id = inscription.idAdh INNER JOIN cours ON cours.id = inscription.idCours INNER JOIN instrument ON instrument.instruId = cours.idInstru INNER JOIN professeur ON professeur.profId =  cours.idProf';
                $sqlGetInscriptions = $bdd->prepare($reqGetInscriptions);
            }
            else
            {
                $reqGetInscriptions = 'SELECT * FROM inscription INNER JOIN adherent ON adherent.id = inscription.idAdh INNER JOIN cours ON cours.id = inscription.idCours INNER JOIN instrument ON instrument.instruId = cours.idInstru WHERE idAdh=:userid ';
                $sqlGetInscriptions = $bdd->prepare($reqGetInscriptions);
                $sqlGetInscriptions->bindParam('userid',$userid);
            }

            $sqlGetInscriptions->execute();
            $getInscriptionsData = $sqlGetInscriptions->fetchAll();

            return $getInscriptionsData;

        }
    }
