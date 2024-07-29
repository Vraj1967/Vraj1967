<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error)
{
 die("Connection failed");
}
if(isset($_POST["fname"]))
{
      //Get form data
      $fname = $_POST['fname'];
      $password = $_POST['password'];     

      $test=" SELECT * FROM mini WHERE fname = '$fname' AND  password='$password' ";
      $_reuslt = $conn->query($test);
      if($_reuslt->num_rows== 1)
      {
        $_SESSION['fname'] = $fname;
        $_SESSION['password'] = $password;


        header("Location:Main.html");
        exit();
      }
      else
      {
        $error=  "Wrong Username or Password";
      }
}
?>

<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
	
	
<div class="login-page">
  <div class="form">

    <form method="post" action="login.php">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input type="text" placeholder="&#xf007;  firstname" id="fname" name="fname" required/>
      <input type="password" id="password" placeholder="&#xf023;  password" id="password" name="password" required/>

      <br>
      <br>
      <button type="submit" class="bt">Login</button> 
           <div class="signup">
            Don't have an account? <a href="http://localhost/project/signup.php">Sign Up</a>

    </form>

  </div>
</div>
</body>
</html>