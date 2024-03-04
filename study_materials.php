<?php
// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "college";
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Handle search query
if (isset($_GET['search'])) {
  $search_term = $_GET['search'];

  // Perform search query
  $query = "SELECT * FROM study_materials WHERE title LIKE '%$search_term%' OR description LIKE '%$search_term%'";
  $result = mysqli_query($conn, $query);

  // Check if there are search results
  $num_results = mysqli_num_rows($result);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Study Materials</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="icon" href="images/Ramdeobaba-Logo.png" type="image/png">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="sub-header sub-header-image-5">
            <nav>
                <a href="index.html"><img src="images/Ramdeobaba-Logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="Curriculum and Syllabus.html">CURRICULUM AND SYLLABUS</a></li>
                        <li><a href="study_materials.php">STUDY MATERIAL</a></li>
                        <li><a href="helpcenter.php">HELP CENTER</a></li>
                        <li><a href="feedback.php">FEED BACK</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Study Materials</h1>
        </section>

<section class="course">
    <div class="help-row">
    <div class="help-col">
	<h1>Study Materials</h1>
	<form method="GET" action="study_materials.php">
		<label for="search">Search:</label>
		<input type="text" id="search" name="search" value="<?php echo isset($search_term) ? $search_term : ''; ?>">
		<button type="submit">Go</button>
	</form>

	<?php
	// Display search results or no results message
	if (isset($num_results)) {
		if ($num_results > 0) {
			echo "<p>Search results for '$search_term':</p>";
			echo "<table>";
			echo "<tr><th>ID</th><th>Title</th><th>Description</th><th>File Path</th><th>Uploaded Date</th></tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['description']."</td><td><a href='".$row['file_path']."'>Download</a></td><td>".$row['uploaded_date']."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "<p>No results found for '$search_term'.</p>";
		}
	}
	?>

	<?php
	// Display all study materials if no search query
	if (!isset($_GET['search']) || $num_results == 0) {
		$query = "SELECT * FROM study_materials";
		$result = mysqli_query($conn, $query);
		echo "<table>";
		echo "<tr><th>ID</th><th>Title</th><th>Description</th><th>File Path</th><th>Uploaded Date</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['description']."</td><td><a href='".$row['file_path']."' class=\"hero-btn-2\" >Download</a></td><td>".$row['uploaded_date']."</td></tr>";
		}
		echo "</table>";
	}
	?>
    </div>
    </div>
</section>

<!-- ------- Footer -------  -->

<section class="footer">
    <h4>Contact us</h4>
    <p>
        #139-140, Kamarajar Salai, Madurai - 625009, India<br>
        Tel: +91 452 2311875, Fax: +91 452 2312375<br>
        Email: principaltcarts@gmail.com<br>
    </p>
    <div class="icons">
        <a class="plain-link" href="https://twitter.com/ThiagarajarArts?s=09"><i class="fa fa-twitter"></i></a>
        <a class="plain-link" href="https://www.facebook.com/profile.php?id=100052589108647"><i class="fa fa-facebook"></i></a>
        <a class="plain-link" href="https://www.instagram.com/thiagarajararts"><i class="fa fa-instagram"></i></a>
        <a class="plain-link" href="https://www.youtube.com/channel/UCptTFniJPA9D34uO5QSHNhw?view_as=subscriber"><i class="fa fa-youtube"></i></a>
    </div>
</section>

</body>
</html>
