<?php 
class EmployesController{

    public function getAllEmployes(){
        $employes = Employe::getAll();

        return $employes;
    }

    public function addEmployes(){
        if(!empty($_POST['name']) && !empty($_POST['status'])){
            $data = array(
                'name' => $_POST['name'] ,
                'status' => $_POST['status'] 
             );
           
             $result = Employe::add($data);
             if ($result) {
                header('location:'.BASE_URL);
                $_SESSION['add_error'] = 'row added successfully to databse';
                
             }else {
               $_SESSION['add_error'] = 'unfortunlly row did not added  to databse :(';

             }
        }else {
            $_SESSION['add_error'] = 'plese fill all information ?';
            header('location:'.BASE_URL);

        }

    }
    public function updateEmployes(){
        $employes = Employe::update();

        return $employes;
    }



}