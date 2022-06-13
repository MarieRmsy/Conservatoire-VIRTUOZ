<?php

    class Cours 
    {
        public function get(object $bdd)
        {
            $req = "SELECT * FROM cours
            INNER JOIN professeur ON cours.idProf = professeur.profId
            INNER JOIN instrument ON cours.idInstru = instrument.instruId";
        
            $exe = connectBDD()->prepare($req);
            $exe->execute();
            $getCours = $exe->fetchAll();
            return $getCours;
        }

        public function delete(object $bdd, int $id_cours)
        {
            $sqlDeleteRow = 'DELETE FROM cours WHERE id=:id';
            $reqDeleteRow = $bdd->prepare($sqlDeleteRow);
            $reqDeleteRow->bindParam('id', $id_cours);
            if($reqDeleteRow->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function add(object $bdd, string $date, int $nbplace, int $idprof, int $idinstru)
        {
            $sqlAddRow = 'INSERT INTO cours(date,nbPlace,idProf,idInstru) VALUES(:date,:nbPlace,:idProf,:idInstru)';
            $reqAddRow = $bdd->prepare($sqlAddRow);
            $reqAddRow->bindParam('date', $date);
            $reqAddRow->bindParam('nbPlace', $nbplace);
            $reqAddRow->bindParam('idProf', $idprof);
            $reqAddRow->bindParam('idInstru', $idinstru);

            if($reqAddRow->execute())
            {
                return true;
            } 
            else {
                return false;
            }
        }
    }

?>