<?php

include_once("connect.php");


 $username = $_GET['name'];
 $password = $_GET['password'];


//Connection to mysql server.
$link = mysqli_connect("localhost", '$username', '$password', "bookreviews");

If ($link) {
	print "You're connected to mysql server.";
}
else {
	print "Couldn't connect to mysql.";
}

/*//Connection to the database.
mysqli_select_db("menagerie") or die("Could not select the database.");*/

$query = ("INSERT INTO pet (name, owner, species, sex, birth, death) VALUES ('Shawie', 'Sonia', 'cat', 'm', '2017-02-02', NULL)");

mysqli_query($link, $query);

?>