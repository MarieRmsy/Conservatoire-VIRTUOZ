<?php

    class Instruments 
    {
        public function get(object $bdd)
        {
            $req = "SELECT instruNom, instruId FROM instrument";
        
            $exe = connectBDD()->prepare($req);
            $exe->execute();
            $getCours = $exe->fetchAll();
            return $getCours;
        }

    }

?>