<?php
session_start();
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['username'];
$sqlid = "SELECT id FROM students_details WHERE name = '$user_id'";
$result = mysqli_query($conn, $sqlid);

if (mysqli_num_rows($result) > 0) {
  // Output user ID
  $row = mysqli_fetch_assoc($result);
  $id = $row['id'];
} else {
  die('User ID or datails not found'); 
}

// Get student data from the database
$sql = "SELECT * FROM students_details WHERE id = $id"; // Change the id value to match the logged in student
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output student data
  $row = mysqli_fetch_assoc($result);
  $name = $row["name"];
  $email = $row["email"];
  $gender = $row["gender"];
  $dob = $row["dob"];
  $address = $row["address"];
  $phone = $row["phone"];
  $created_at = $row["created_at"];
} else {
  echo "No student data found";
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curriculum and Syllabus</title>
        <link rel="icon" href="images/Ramdeobaba-Logo.png" type="image/png">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="sub-header sub-header-image-2">
  <nav>
  <a href="index.html"><img src="images/Ramdeobaba-Logo.png"></a>
  <div class="nav-links" id="navLinks">
    <i class="fa fa-times" onclick="hideMenu()"></i>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.html">ABOUT</a></li>
      <li><a href="Curriculum and Syllabus.html">CURRICULUM AND SYLLABUS</a></li>
      <li><a href="">STUDY MATERIAL</a></li>
      <li><a href="helfcenter.html">HELP CENTER</a></li>
      <li><a href="feedback.php">FEED BACK</a></li>
    </ul>
  </div>
  <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>
  <h1>Welcome <?php echo $name; ?>!</h1>
  <a href="logout.php" class="hero-btn">Log out</a>
</section>
<center>
<section class="course">
  <div class="row">
    <div class="course-col" style=\"margin-left: 403px;\">
      <h2>Details</h2>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Gender:</strong> <?php echo $gender; ?></p>
      <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
      <p><strong>Address:</strong> <?php echo $address; ?></p>
      <p><strong>Phone:</strong> <?php echo $phone; ?></p>
      <p><strong>Account Created:</strong> <?php echo $created_at; ?></p>
    </div>
  </div>
</section>
</center>

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
