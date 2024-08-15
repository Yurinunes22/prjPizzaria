<?php 
//ip: porta,nome do bd, login e senha 
$db_host = 'localhost';
$db_port=3311;
$db_name = 'jspizzaria_db';
$db_user = 'yurinunes';
$db_pwd='yuri2020';

$pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pwd);