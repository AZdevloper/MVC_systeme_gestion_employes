<?php

class HomeCotroller{
    public function index(string $page){
        include_once('views/'.$page.'.php');
    }
}

?>


