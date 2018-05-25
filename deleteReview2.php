<?php

include_once("connect.php");
require("deleteReview3.php");

 $id = $_POST['id'];


//Connection to mysql server.
$link = mysqli_connect("localhost", "root", "", "bookreviews");


/*//Connection to the database.
mysqli_select_db("menagerie") or die("Could not select the database.");*/

$query = ("DELETE FROM reviews WHERE id = '$id'");

mysqli_query($link, $query);

?>