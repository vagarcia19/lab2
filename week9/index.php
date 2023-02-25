<!doctype html>
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
    
    <title>Vieron's Personal Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
      <a href="#" class="logo">vieron</a>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="https://www.facebook.com/dakto.box">Facebook</a></1i>
        <li><a href="reg2.php">Register</a></1i>
      </ul>
    </header>
</header>

<section>
    <img src="stars.png" id="stars" width="120%" height="120%">
    <img src="moon.png" id="moon">
    <img src="mountains_behind.png" id="mountains_behind"width="100%" height="100%">
    <h2 id="text">welcome</h2>
    <a href="Click.php" id="btn">About me</a>
    <img src="bundok.png" id="bundok"width="100%" height="100%">
</section>

<div id="sec">
  <div class="col-sm-4 col-md-3 item">
    <h3>Services</h3>
    <ul>
        <li><a href="#">Web design</a></li>
        <li><a href="#">Development</a></li>
        <li><a href="#">Hosting</a></li>
    </ul>
  </div>
  <div class="col-sm-4 col-md-3 item">
    <h3>About</h3>
    <ul>
        <li><a href="#">Company</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Legacy</a></li>
    </ul>
  </div>
  <div class="col-sm-4 col-md-3 item">
    <h3>Careers</h3>
    <ul>
        <li><a href="#">Job openings</a></li>
        <li><a href="#">Employee success</a></li>
        <li><a href="#">Benefits</a></li>
    </ul>
  </div>
  
</div>
<script>
    let moon = document.getElementById('stars')
    let moon = document.getElementById('moon')
    let moon = document.getElementById('mountains_behind')
    let moon = document.getElementById('text')
    let moon = document.getElementById('btn')
    let moon = document.getElementById('bundok')

    window.addEventListener('scroll', Function(){
        let value = window.scrollY
        stars.style.;Left = value + 'px';
   }) 
  </script>
    
</body>
</html>