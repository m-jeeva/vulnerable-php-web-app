<?php
session_start();
// database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$user_id = $_SESSION['username'];

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// fetch all students
$sql = "SELECT * FROM students_details";
$result = $conn->query($sql);

// close connection
$conn->close();
?>

<!-- HTML code for the Staff dashboard -->
<!DOCTYPE html>
<html>
<head>
  <title>Staff Dashboard</title>
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
  <h1>Welcome <?php echo $user_id; ?>!</h1>
  <a href="logout.php" class="hero-btn">Log out</a>
</section>
<center>
  <h1>Details of Students</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["dob"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["created_at"]; ?></td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td colspan="8">No students found.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
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
