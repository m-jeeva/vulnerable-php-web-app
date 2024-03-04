<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  // If user is already logged in, redirect to their respective page
  if($_SESSION["user_type"] == "student"){
    header("location: student_dashboard.php");
    exit;
  }
  else if($_SESSION["user_type"] == "staff"){
    header("location: staff_dashboard.php");
    exit;
  }
}

// Define variables for storing user credentials
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$user_type = "";

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // Check if username is empty
  if(empty(trim($_POST["username"]))){
    $username_err = "Please enter a username.";
  } else{
    $username = trim($_POST["username"]);
  }

  // Check if password is empty
  if(empty(trim($_POST["password"]))){
    $password_err = "Please enter a password.";
  } else{
    $password = trim($_POST["password"]);
  }

  // Check if confirm password is empty
  if(empty(trim($_POST["confirm_password"]))){
    $confirm_password_err = "Please confirm password.";
  } else{
    $confirm_password = trim($_POST["confirm_password"]);
    if($password != $confirm_password){
      $confirm_password_err = "Password did not match.";
    }
  }

  // Check if there are no errors in the form
  if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "college");

    // Check if the connection was successful
    if(!$conn){
      die("Connection failed: " . mysqli_connect_error());
    }

    // Set parameters
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST["user_type"];

    if($user_type=="student")
    {
        // Prepare an insert statement
        $stmt = "INSERT INTO students (username, password) VALUES ('$username', '$password')";
    }
    else if($user_type=="staff")
    {
        // Prepare an insert statement
        $stmt = "INSERT INTO staffs (username, password) VALUES ('$username', '$password')";
    }

    // Attempt to execute the prepared statement
    if(mysqli_query($conn, $stmt)){
        if($user_type=="student")
        {
            $stmt = "INSERT INTO `students_details`(`name`, `password`) VALUES ('$username','$password')";
            mysqli_query($conn, $stmt);
        }
      // If the registration was successful, redirect to the login page
      header("location: login.php");
    }
    else{
      echo "Oops! Something went wrong. Please try again later.";
    }


    // Close connection
    mysqli_close($conn);
  }
}
?>

<html>
<head>
  <title>Register Page</title>
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
            <h1>REGISTER PAGE!</h1>
</section>

<section class="course">
    <div class="row">  
        <div class="course-col">
            <center><h1>Register New user</h1></center><br>


            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

              <div>
                <label>Username : </label>
                <input type="text" name="username">
                <span><?php echo $username_err; ?></span>
              </div><br><br>

              <div>
                <label>Password : </label>
                <input type="password" name="password">
                <span><?php echo $password_err; ?></span>
              </div><br><br>

              <div>
                <label>Confirm Password : </label>
                <input type="password" name="confirm_password">
                <span><?php echo $confirm_password_err; ?></span>
              </div><br><br>

              <div>
                <label>user type : </label>
                <input type="text" name="user_type" placeholder="student/staff">
              </div><br><br>
              <center>
              <div>
                  <input type="submit" value="submit" name="submit">
              </div>
            </form>
            </center>

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