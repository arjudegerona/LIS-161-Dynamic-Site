<?php

include_once("connect.php");
require("samplePost1.html");

$commentName = $_POST['name'];
$commentEmail = $_POST['email'];
$comment = $_POST['comments'];
$date = date('Y-m-d');
$time = date('H:i:s');


$query= "INSERT INTO p1comments (commentName, commentEmail, comment, date, time) VALUES('$commentName', '$commentEmail', '$comment', '$date', '$time')";

mysqli_query($link, $query);

$query = ("SELECT * FROM p1comments");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);


print "<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row( $result ) ) {
	print "<tr>\n";
	foreach ( $a_row as $field) {
		print "\t<td>".$field."</td>\n";
	}
	print "</tr>\n";
}
print "</table>\n";

?>