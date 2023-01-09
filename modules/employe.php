<?php 

class Employe {

     static public function getAll(){
        $stmt= DB::connect()->prepare('SELECT  * FROM employees');
        $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    

     }
     static public function add($data){
          extract($data);
          $stmt= DB::connect()->prepare('INSERT INTO `employees`(`name`, `status`) VALUES (?,?)');
         $result = $stmt->execute(array($name,$status));
     //     $result->close();
     //     $result = null;
         return $result;
       }
     static public function update(){
          $stmt= DB::connect()->prepare('SELECT  * FROM employees');
          $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      
  
     }

}