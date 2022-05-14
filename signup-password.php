<?php 
session_start(); 
include "conn.php";
include("part/frontend.php");

	$msg = "";
												if($_SERVER["REQUEST_METHOD"] == "POST"){
 
													
													
													Validate password;
													if(empty(trim($_POST["password"]))){
														$msg = "Please enter a password.";     
													} elseif(strlen(trim($_POST["password"])) < 6){
														$msg = "Password must have atleast 6 characters.";
													} else{
														$password = trim($_POST["password"]);
													}
													
													
													
													
													// Check input errors before inserting in database
													if(empty($msg)){
														
														// Prepare an insert statement
														$sql = "INSERT INTO users (password) VALUES (?)";
														 
														if($stmt = mysqli_prepare($link, $sql)){
															// Bind variables to the prepared statement as parameters
															mysqli_stmt_bind_param($stmt, "s", $param_password);
															
															// Set parameters
															$param_password = $password;
															
															
															// Attempt to execute the prepared statement
															if(mysqli_stmt_execute($stmt)){
															  
														   echo "<script>
                                                            window.location.href = 'login.php?success';
                                                        </script>";   
															} else{
																echo "Something went wrong. Please try again later.";
															}
														}
														 
														// Close statement
														mysqli_stmt_close($stmt);
													}
													
													// Close connection
													mysqli_close($link);
											
												}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="./assets/css/auth.css"">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <!--Header-->
        <?php nav() ?>
        <!--Header-->
        <div>
        <div>
         <div>
      <div class="row">
        <div class="col s6 m3"></div>
        <div class="col s6 m6 login">
          <div></div>
          <div class="username">
            <input
              type="text"
              class="inputUsername"
              placeholder="NEW PASSWORD"
            />
          </div>
          <div class="username">
            <input
              type="password"
              class="inputUsername"
              placeholder="RE-ENTER PASSWORD"
            />
          </div>

          <div class="clickLogin">
            <span class="loginText">Submit</span>
          </div>
        </div>
        <div class="col s6 m3"></div>
      </div>
    </div>
      </div>
    </div>
    </div>

    <!--Footer-->
    <?php footer() ?>
    <!--Footer-->
</body>
</html>