<?php

require_once './controllers/HomeController.php';

$home = new HomeCotroller();

$pages = ['home','delete','add','update'];

if(isset($_GET['page'])) {
    if(in_array($_GET['page'],$pages)){

        $home->index($_GET['page']);
    }

}else{
    $home->index('home');
}


