<?php

$serv = "db";
$user = "root";
$password = "example";
$database = "cliente";


$connect = new mysqli($serv, $user, $password, $database);
$result = $connect->query("SELECT PersonID, Name FROM registration");

$number_line = $result->fetch_row();

for($element = 0; $element<$number_line; $element){
	$data = $result->fetch_row();
	$person = $data[0];
	$Name = $data[1];

	echo "$person - $Name <br>";
}

$connect->close();




?>