<html>

<head>
	<title>Jude the Bibliovore</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script type="text/javascript"></script>
</head>

<body>
	
	<!-- HEADER AREA -->
	<div id="header">
		<center><a href="index.html" target="_self"><img src="header.png"></img></a></center>
	</div>
	
	<!-- MENU AREA -->
	<div id="menubar">
		<center>
			<h1 class="menu"><a class="menu" href="bookreviews.php">BOOK REVIEWS</a> | <a class="menu" href="reviewsystem.html">REVIEW SYSTEM</a> | <a class="menu" href="reviewpolicy.html">REVIEW POLICY</a> | <a class="menu" href="branddeals.html">BRAND DEALS</a> | <a class="menu" href="gallery.html">GALLERY</a></h1>
		</center>
	</div>
	
	<!-- BODY AREA -->
	<div id="wrapper">
	
		<!-- POSTS AREA -->
		<div class="content">
		
			
			<div class="post">
				<h1 class="pageTitle">Book Reviews</h1>
				
				<a href = "bookreviews.php">Show Reviews</a>
				<a href = "searchReview.php">Search Review</a>
				<a href = "addReviewLG.php">Add Review</a>
				<a href = "updateReviewLG.php">Update Review</a>
				<a href = "deleteReviewLG.php">Delete Review</a>
				

				<hr>
				<br>
				<h3>SEARCH VIA TITLE</h3>
				<form method="POST" action="searchReview2title.php">

					Enter a book title: <input type="text" name="title">
					<br>
					<input type="submit" value="Search for title">
				</form>
				<br>
				
				<h3>SEARCH VIA AUTHOR</h3>
				<form method="POST" action="searchReview2author.php">

					Enter an author: <input type="text" name="author">
					<br>
					<input type="submit" value="Search for series">
				</form>
				<br>
				
				<h3>SEARCH VIA SERIES TITLE</h3>
				<form method="POST" action="searchReview2series.php">

					Enter a series: <input type="text" name="series">
					<br>
					<input type="submit" value="Search for author">
				</form>
				<br>
				
				<h3>SEARCH VIA RATING</h3>
				<form method="POST" action="searchReview2rating.php">

					Choose a rating: <input type="radio" name="rating" value="5 Stars"> 5 Stars
					  <input type="radio" name="rating" value="4 Stars"> 4 Stars
					  <input type="radio" name="rating" value="3 Stars"> 3 Stars
					  <input type="radio" name="rating" value="2 Stars"> 2 Stars
					  <input type="radio" name="rating" value="1 Star"> 1 Star
					  <input type="radio" name="rating" value="DNF"> Did Not Finish<br>
					
					<input type="submit" value="Search for ratings">
				</form>
				
				
				<br>
				<br>
				
				<?php
					//Connection to mysql server.
					//Connection to mysql server.
					$link = mysqli_connect("localhost", "root", "", "bookreviews");

					$series = $_POST['series'];


					$query = ("SELECT * FROM reviews WHERE series = \"$series\"");

					$result = mysqli_query($link, $query);

					$num_rows = mysqli_num_rows($result);

					print "<br>There are $num_rows record/s";


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

				
				<!--<a class="reviewLink" href="samplePost1.html">Warcross by Marie Lu</a><!---Review Link 1--->
				<br>
				<br>
				<!--<a class="reviewLink" href="samplePost1.html">Seeker by Alwyn Elys Dayton</a><!---Review Link 2--->
				
			</div>
			
		</div>
		
		<!-- SIDE BAR-->
		<div class="sidebar">
		
			<!-- ABOUT-->
			<div class="widget">
				<div class="widgetHeading">
					<p>ABOUT</p>
				</div>
				
				<div class="widgetContent">
					<img src="about.jpg" align="center" height="245px" width="245px">
					<br>
					<p class="widgetContent">
						<br>
						<i>biblio:</i> relating to a book or books
						<br>
						<i>-vore:</i> to eat or devour
						<br>
					</p>
					<br>
					<p class="widgetContent">I am Jude the Bibliovore.</p>
					<br>
					<p class="widgetContent">A self-proclaimed devourer and frustrated collector of books. And no, I do not literally eat my books. Pay no attention to the pieces of paper stuck in my teeth.</p>
					<br>
					<p class="widgetContent">For inquiries, email me at judereads (at) gmail (dot) com.</p>
					<br>
					<a href="https://facebook.com/judethebibliovore"><img alt="Facebook" src="facebook.png" title="Jude the Bibliovore on Facebook"></a> 
					<a href="https://instagram.com/amongthetomes"><img alt="Instagram" height="33" src="instagram.png" title="Instagram" width="33"></a> 
					<a href="https://www.goodreads.com/joodreads"><img alt="Goodreads" height="30" src="goodreads.png" title="Goodreads" width="30"></a>
				</div>
			</div>
			
			<!--SEARCH-->
			<div class="widget">
				<div class="widgetHeading">
					<p>SEARCH</p>
				</div>
				<div class="widgetContent">
					<form action="" align="left">
						<input type="text" name="search" value="Type a keyword..." size="24">
						<input align="right" type="submit" value="Search">
					</form>
				</div>
			</div>
			
			<!--Book Generator-->
			<div class="widget">
				<div class="widgetHeading">
					<p>RECOMMEND ME A BOOK!</p>
				</div>
				<div class="widgetContent">
					<button id="myBtn">Click to recommend</button>
					<div id="myModal" class="modal">

					 <!-- Modal content -->
					 <div class="modal-content">
						<span class="close">&times;</span>
						<form class="popup" align="left">
							Recommend me a book!<br>
							<br>
							Title: <input type="text" size="50"><br>
							Author:	 <input type="text" size="50"><br>
							Genre:	 <input type="text" size="50"><br>
							Your rating (/5stars):
							<select>
								<option value="5stars">5 Stars</option>
								<option value="4stars">4 Stars</option>
								<option value="3stars">3 Stars</option>
								<option value="2stars">2 Stars</option>
								<option value="1star">1 Star</option>
							</select>
							<br>
							<input align="right" type="submit" value="Submit">							
					 </div>
					  
					 <script>
						// Get the modal
						var modal = document.getElementById('myModal');

						// Get the button that opens the modal
						var btn = document.getElementById("myBtn");

						// Get the <span> element that closes the modal
						var span = document.getElementsByClassName("close")[0];

						// When the user clicks on the button, open the modal 
						btn.onclick = function() {
							modal.style.display = "block";
						}

						// When the user clicks on <span> (x), close the modal
						span.onclick = function() {
							modal.style.display = "none";
						}

						// When the user clicks anywhere outside of the modal, close it
						window.onclick = function(event) {
							if (event.target == modal) {
								modal.style.display = "none";
							}
						}
					</script>
					</div>
					
				</div>
			</div>
			
			<!---SUBSCRIBE VIA EMAIL--->
			<div class="widget">
				<div class="widgetHeading">
					<p>SUBSCRIBE VIA EMAIL</p>
				</div>
				<div class="widgetContent">
					<form action="" align="left">
						<input type="text" name="email" value="Enter your email..." size="24">
						<input align="right" type="submit" value="Submit">
					</form>
				</div>
			</div>
			
			<!---GOODREADS--->
			<div class="widget">
				<div class="widgetHeading">
					<p>GOODREADS</p>
				</div>
				<div class="widgetContent">
					<style><br />#gr_updates_widget{<br />border-radius: 5px;<br />background-color:#fff;<br />-webkit-box-shadow: 0px 0px 4px 1px #595959,<br />inset 0px 0px 0px 1px #7D730B;<br />-moz-box-shadow: 0px 0px 4px 1px #595959,<br />inset 0px 0px 0px 1px #7D730B;<br />box-shadow: 0px 0px 4px 1px #595959,<br />inset 0px 0px 0px 1px #7D730B;<br />padding:15px 0 35px 15px;<br />width:210px;<br />height:330px;<br />}<br />#gr_footer{<br />margin-bottom:10px;<br />}<br />#gr_updates_widget p{<br />padding:0px;<br />margin:0;<br />font-size:14px;<br />}<br />#gr_footer img{<br />width:100px;<br />float:left;<br />}<br />#gr_updates_widget img{<br />	border-style:none;<br />}<br /></style><br />	<div id="gr_updates_widget"><br />	  <iframe frameborder="0" height="330" id="the_iframe" src="https://www.goodreads.com/widgets/user_update_widget?height=400&amp;num_updates=3&amp;user=28232039&amp;width=210" width="210"></iframe><br />		<div id="gr_footer"><br />		  <a href="https://www.goodreads.com/"><img alt="Goodreads: Book reviews, recommendations, and discussion" src="https://www.goodreads.com/images/layout/goodreads_logo_140.png" / /></a><br />		</div><br />	</div>
				</div>
			</div>
			
		</div>
		
	</div>
</body>

</html>