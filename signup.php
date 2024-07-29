


        
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>SIGNUP</title>
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
	
<div class="signup-page">
  <div class="form">

    <form method="post" action="signup.php">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
     
      <input type="text" placeholder="&#xf007;  First Name"  id="fname" name="fname" required/>
      <input type="text" placeholder="&#xf007;  Last Name" id="lname" name="lname" required/>
      <input type="email" placeholder="&#xf0e0;  Email"required  id="email" name="email" required/>
      <input type="password" id="password" placeholder="&#xf023;  Password"  id="password" name="password" required/>
      <input type="password" id="confirmPassword" placeholder="&#xf023;  Confirm Password"  id="cpassword" name="cpassword" required/>
      <button type="submit" class="bt">Signup</button> 
      <br>
      <br>
      <p class="message"></p>
    </form>

    
  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>
