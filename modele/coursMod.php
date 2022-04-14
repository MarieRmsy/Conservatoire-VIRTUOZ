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
    }

?>