<?php
// Start session
session_start();

// Define database connection variables
$host = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check for database connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if login form has been submitted
if(isset($_POST['student_login'])) {
    // Get input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query database for student with entered credentials
    $sql = "SELECT * FROM students WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if student is found
    if(mysqli_num_rows($result) == 0) {
        die('Username and password not valid!'); 
    } else {
        // Set session variables for logged in student
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = 'student';

        // Redirect to student dashboard
        header("Location: student_dashboard.php");
        exit();
    }
}

if(isset($_POST['staff_login'])) {
    // Get input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query database for staff member with entered credentials
    $sql = "SELECT * FROM staffs WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if staff member is found
    if(mysqli_num_rows($result) == 0) {
        die('Username and password not valid!');
    } else {
        // Set session variables for logged in staff member
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = 'staff';

        // Redirect to staff dashboard
        header("Location: staff_dashboard.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<section class="sub-header sub-header-image-7">
            <nav>
                <a href="index.php"><img src="images/Ramdeobaba-Logo.png"></a>
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
            <h1>LOGIN  PANEL</h1>
</section>


	<?php if(isset($error_message)) { ?>
		<p><?php echo $error_message; ?></p>
	<?php } ?>


	<!-- Student login form -->

<section class="course">
    <div class="row">  
        <div class="course-col">
            <center><h1>Student login!</h1></center><br>
            <center>
	    <form method="post">
		    <label for="username">Username:</label>
		    <input type="text" name="username" id="username" required><br><br>
		    <label for="password">Password:</label>
		    <input type="password" name="password" id="password" required><br><br>
		    <input type="submit" name="student_login" value="Login">
	    </form>
    </center>
        </div>

	<!-- Staff login form -->
    <div class="course-col">
            <center><h1>Staff login!</h1></center>
            <br>
            <center>
	<form method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>
		<input type="submit" name="staff_login" value="Login">
	</form>
    </center>
        </div>
    </div>
</section>

<center>
<a href="register.php" class="hero-btn-2">REGISTER NEW USER</a></li>
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
