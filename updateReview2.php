<?php

include_once("connect.php");
require("updateReview3.php");

$rating = $_POST['rating'];
$id = $_POST['id'];

//Connection to mysql server.
$link = mysqli_connect("localhost", "root", "", "bookreviews");


$query = ("UPDATE reviews SET rating = '$rating' WHERE id = '$id'");

mysqli_query($link, $query);

?>