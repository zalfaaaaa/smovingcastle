<?php

$nama = $_GET['nama'];
$kelas = $_GET['kelas']; 
$id = $_GET['id'];

$totoro = new PDO ('mysql:host=localhost;dbname=bandungsugoi','root','');
$query = $totoro->query("update `murid` set `nama` ='$nama', `kelas` = '$kelas' where `id` = $id");