<?php
$conn = mysqli_connect("localhost", "root", "", "insurance");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
    $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
    $email = mysqli_real_escape_string($conn,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM admin WHERE email='$email'and password='$password'";
    $result = mysqli_query($conn,$query) ;
    $rows = mysqli_num_rows($result);
        if($rows==1){
        $_SESSION['email'] = $email;
            // Redirect user to dashboard.php
        header("Location: dashboard.php");
         }else{


    }
    }else{
    }
?>

<!DOCTYPE html>
<html>
<title>Admin Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="design.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>

</style>
<body>
  <div class="container">
    <div class="w3-top">
      <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="img/logo.png" alt="logo" style="width:20%"/></a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
          <a href="index.php#about" class="w3-bar-item w3-button">ABOUT</a>
          <a href="index.php#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> TEAM</a>
          <a href="index.php#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> SEMINAR</a>
          <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOGIN</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post">
				<div class="login__field">
					<i class="login__icon fa fa-user"></i>
					<input type="text" name="email" class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fa fa-lock"></i>
					<input type="password" name ="password"class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit" type="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fa fa-chevron-right"></i>
				</button>

        <?php
        if (isset ($_SESSION ['error'])){
          echo('<p style ="color:red">'.htmlentities($_SESSION["error"])."</p>\n");
          unset($_SESSION["error"]);
        }
        ?>
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
</div>
</body>
</html>
