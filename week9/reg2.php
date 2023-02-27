<!DOCTYPE HTML>  
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

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
    <a href="index.php" class="logo">vieron</a>
    <ul>
    <li><a href="index.php#" class="active">Home</a></li>
    <li><a href="vagarcia_guests.php">My Guests</a></1i>
    <li><a href="#">Register</a></1i>
    </ul>
</header>
<section>
    <img src="stars.png" id="stars" width="120%" height="120%">
</section>
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {

            $servername = "192.168.150.213";
            $username = "webprogmi212";
            $password = "b3ntRhino98";
            $dbname = "webprogmi212";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO vagarcia_myguests (name,email, website,comment,gender)
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
<div class="footer-clean">
  <footer>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-4 col-md-3 item">
                  <h3>Resources</h3>
                  <ul>
                      <li><a href="https://www.w3schools.com/">W3Schools</a></li>
                      <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
                      <li><a href="https://fontawesome.com/">FontAwesome</a></li>
                  </ul>
              </div>
              <div class="col-sm-4 col-md-3 item">
                  <h3> --------------- </h3>
                  <ul>
                      <li><a href="#">Stack Overflow</a></li>
                      <li><a href="#">Coolors</a></li>
                      <li><a href="#">Pinterest</a></li>
                  </ul>
              </div>
              <div class="col-sm-4 col-md-3 item">
                  <h3>  ---------------  </h3>
                  <ul>
                      <li><a href="#">LinkedIn</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 item social"><a href="https://www.facebook.com/dakto.box"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a>
                  <p class="copyright">Vieron © 2023</p>
              </div>
          </div>
      </div>
  </footer>
</div>
</body>
</html>