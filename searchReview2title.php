<?php
include_once("connect.php");
require("searchReview3title.php");
//Connection to mysql server.
$link = mysqli_connect("localhost", "root", "", "bookreviews");

$title = $_POST['title'];


$query = ("SELECT * FROM reviews WHERE title = \"$title\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);

print "<br>There are $num_rows record/s<br>";


print "<table border=\"1\">\n";
print "<tr><th>Number</th><th>Title</th><th>Series</th><th>Author</th><th>Rating</th><th>Date</th>";
while ( $a_row = mysqli_fetch_row( $result ) ) {
	print "<tr>\n";
	foreach ( $a_row as $field) {
		print "\t<td>".$field."</td>\n";
	}
	print "</tr>\n";
}
print "</table>\n";
?>