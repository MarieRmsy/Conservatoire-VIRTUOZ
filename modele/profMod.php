<?php

    class Professeur 
    {
        public function get(object $bdd)
        {
            $req = "SELECT * FROM professeur";
        
            $exe = connectBDD()->prepare($req);
            $exe->execute();
            $getCours = $exe->fetchAll();
            return $getCours;
        }

    }

?>