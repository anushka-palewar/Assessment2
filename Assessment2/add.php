<?php
require 'vendor/autoload.php';

if (isset($_POST['title'])) {
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];

    $fields = [
        'name' => $name,
        'email' => $email,
        'phone'=> $phone
    ];
    
    create('contacts', $fields);
    
    header('Location: index.php');
    exit;
}

include 'views/add.view.php';