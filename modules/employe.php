<?php 

class Employe {

     static public function getAll(){
        $stmt= DB::connect()->prepare('SELECT  * FROM employes');
        $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    

     }

}