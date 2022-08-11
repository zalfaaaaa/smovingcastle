<?php

$id = $_GET['id'];

    $ponyo = new PDO ('mysql:host=localhost;dbname=bandungsugoi','root','');
    $query = $ponyo->query('delete from murid id = $id');

    if($query){
        header("Location:deleteponyo.php");
    }