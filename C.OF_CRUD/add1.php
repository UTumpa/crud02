<?php
$first_name= $_POST['name1'];


$link =mysqli_connect("localhost","root","lict@2","crud01");


$query ="INSERT INTO `crud01`.`emails`(`id`,`email`,`created`) VALUES ('','$first_name',NOW())";

mysqli_query($link,$query);

header('location:list1.php');