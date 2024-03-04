<!DOCTYPE html>
<html>
<head>
	<title>Feedback Forms</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/Ramdeobaba-Logo.png" type="image/png">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#student-form").hide();
			$("#staff-form").hide();
			$("#parent-form").hide();
			
			$("#student-button").click(function(){
				$("#student-form").show();
				$("#staff-form").hide();
				$("#parent-form").hide();
			});
			
			$("#staff-button").click(function(){
				$("#student-form").hide();
				$("#staff-form").show();
				$("#parent-form").hide();
			});
			
			$("#parent-button").click(function(){
				$("#student-form").hide();
				$("#staff-form").hide();
				$("#parent-form").show();
			});
		});
	</script>


<style>
    /* Feedback form styles */

    form {
        display: none;
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 40px;
        background-color: #fff3f3;
        max-width: 600px;
    }

    h2 {
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        display: block;
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0062cc;
    }

    /* Feedback button styles */

    button {
        margin: 20px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0062cc;
    }
</style>


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
                        <li><a href="study_materials.php">STUDY MATERIAL</a></li>
                        <li><a href="helpcenter.php">HELP CENTER</a></li>
                        <li><a href="feedback.php">FEED BACK</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Feedback Forms</h1>
</section>
	
	<center>
	<button id="student-button">Student Feedback</button>
	<button id="staff-button">Staff Feedback</button>
	<button id="parent-button">Parent Feedback</button>
	</center>
    <center>
<!-- Student Feedback Form -->
	<form id="student-form" action="" method="post" style="display:none;">
		<h2>Student Feedback Form</h2>
		<label for="name">Name : </label>
		<input type="text" id="name" name="name" required><br><br>
        <label for="name">Rollno :</label>
		<input type="text" id="rollno" name="rollno" required><br><br>



        <label for="name">Infrastructure, Classroom, Laboratory, facility and other facilities :</label>
        <input type="radio"  name="Library" value="good">
        <label for="good">good</label>
        <input type="radio"  name="Library" value="average">
        <label for="average">average</label>
        <input type="radio"  name="Library" value="bad">
        <label for="bad">bad</label><br><br>

        <label for="name">Academic programs :</label>
        <input type="radio"  name="Library1" value="good">
        <label for="good">good</label>
        <input type="radio"  name="Library1" value="average">
        <label for="average">average</label>
        <input type="radio"  name="Library1" value="bad">
        <label for="bad">bad</label><br><br>

        <label for="name">Carrier guidence and placement :</label>
        <input type="radio"  name="Library2" value="good">
        <label for="good">good</label>
        <input type="radio"  name="Library2" value="average">
        <label for="average">average</label>
        <input type="radio"  name="Library2" value="bad">
        <label for="bad">bad</label><br><br>
        
        <label for="name">Project Work :</label>
        <input type="radio"  name="Library3" value="good">
        <label for="good">good</label>
        <input type="radio"  name="Library3" value="average">
        <label for="average">average</label>
        <input type="radio"  name="Library3" value="bad">
        <label for="bad">bad</label><br><br>


        
		<label for="email">Email : </label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="feedback">Feedback : </label><br>
		<textarea id="feedback" name="feedback" rows="5" cols="50" required></textarea><br><br>
		<input type="hidden" name="category" value="Student">
		<input type="submit" value="Submit">
	</form>
    </center>

    <center>
<!-- Staff Feedback Form -->
	<form id="staff-form" action="" method="post" style="display:none;">
		<h2>Staff Feedback Form</h2>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="feedback">Feedback:</label><br>
		<textarea id="feedback" name="feedback" rows="5" cols="50" required></textarea><br><br>
		<input type="hidden" name="category" value="Staff">
		<input type="submit" value="Submit">
	</form>
    </center>
	
    <center>
<!-- Parent Feedback Form -->
	<form id="parent-form" action="" method="post" style="display:none;">
		<h2>Parent Feedback Form</h2>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="feedback">Feedback:</label><br>
	<textarea id="feedback" name="feedback" rows="5" cols="50" required></textarea><br><br>
	<input type="hidden" name="category" value="Parent">
	<input type="submit" value="Submit">
    </form>
    </center>

<?php
// database connection details
$host = "localhost";
$user = "root";
$password = "";
$dbname = "college";

// connect to database
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name'])) 
{

// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$category = $_POST['category'];

// prepare SQL statement
$stmt = "INSERT INTO feedback (name, email, feedback, category) VALUES ('$name', '$email', '$feedback', '$category')";

// execute SQL statement
if (mysqli_query($conn, $stmt)) 
{
    /*
    // Extract substring from beginning to first single quote
    $pos = strpos($name, "'");
    $name1 = substr($name, 0, $pos);

    $sql = "SELECT category FROM feedback WHERE name = '1' LIMIT 1";
	$result = mysqli_query($conn, $sql);
    */

    //----------------------------------------------------------------------
    $id = mysqli_insert_id($conn);
    $sql = "SELECT * FROM feedback WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    // Display the row
	if (mysqli_num_rows($result) > 0) 
    {
	  $row = mysqli_fetch_assoc($result);
      echo "<center> <h3>";
	  echo "Thank you " . $row["name"] . "(" . $row["category"] .") for your Feedback";
      echo "</h3> </center> ";
	}
} 
else 
{
    echo "Error submitting feedback: " . $conn->error;
}

}

// close database connection
$conn->close();
?>

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