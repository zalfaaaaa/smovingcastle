<?php

$nama = $_GET['nama'];
$kelas = $_GET['kelas']; 

$totoro = new PDO ('mysql:host=localhost;dbname=bandungsugoi','root','');
$query = $totoro->query("insert into murid values ('','$nama','$kelas')");