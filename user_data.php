<?php

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$filename = "userdata.csv";
$handle = fopen($filename, "w");

fwrite($handle, "Name: ". $name . "\n");
fwrite($handle, "Email: ". $email . "\n");
fwrite($handle, "Date of birth: ". $date . "\n");
fwrite($handle, "Gender: ". $gender . "\n");
fwrite($handle, "Country: ". $country . "\n");




fclose($handle);
// $handle = fopen($filename, "r");
// $contents = fread($handle, filesize($filename));
// echo $contents;
// fclose($fileinput);

print_r($_POST) . '<br>' ;
