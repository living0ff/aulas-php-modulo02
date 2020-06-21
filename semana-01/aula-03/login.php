<?php


if(isset($_POST['login'])) {
    echo $_POST['login'];
};

//dd($_POST);

function dd($p = []){
    echo '<pre>';
    print_r($p);
    echo '</pre>';
    
};