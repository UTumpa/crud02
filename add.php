<?php
$first_name= $_POST["name1"];


$link =mysqli_connect("localhost","root","lict@2","crud02");


$query ="INSERT INTO `crud02`.`student`(`id`,`first_name`) VALUES (null,'$first_name')";

mysqli_query($link,$query);

header('location:list.php');