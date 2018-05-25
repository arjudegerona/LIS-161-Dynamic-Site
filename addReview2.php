<?php

include_once("connect.php");
require("addReview3.php");

$title = $_POST['title'];
$series = $_POST['series'];
$author = $_POST['author'];
$rating = $_POST['rating'];
$date = date('Y-m-d');

$query= "INSERT INTO reviews (title, series, author, rating, date) VALUES('$title', '$series', '$author', '$rating', '$date')";

mysqli_query($link, $query);


?>

