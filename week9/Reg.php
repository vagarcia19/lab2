<!DOCTYPE HTML>  
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    
    <!-- Custom Css -->
    
    <title>Vieron's Personal Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<header>
    <a href="#" class="logo">vieron</a>
    <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="https://www.facebook.com/dakto.box">Facebook</a></1i>
        <li><a href="Reg.php">Register</a></1i>
    </ul>
</header>
    <img src="stars.png" id="stars" width="120%" height="120%">
<div class = "forms">
    <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
            }    
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <h2>Join my cult!</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbTEST";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
    $sql = "INSERT INTO MyGuests (name,email, website,comment,gender)
	VALUES ('$name', '$email','$website','$comment','$gender')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}	
?>

</div>
</forms>
</body>
</html>