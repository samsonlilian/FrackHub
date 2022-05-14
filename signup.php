<?php 
session_start(); 
include "conn.php";
include("part/frontend.php");

	$msg = "";
												if($_SERVER["REQUEST_METHOD"] == "POST"){
 
													
													  // Validate email
													  if(empty(trim($_POST["email"]))){
														$msg= "Please enter an email.";
													} else{
														// Prepare a select statement
														$sql = "SELECT id FROM users WHERE email = ?";
														
														if($stmt = mysqli_prepare($link, $sql)){
															// Bind variables to the prepared statement as parameters
															mysqli_stmt_bind_param($stmt, "s", $param_email);
															
															// Set parameters
															$param_email = trim($_POST["email"]);
															
															// Attempt to execute the prepared statement
															if(mysqli_stmt_execute($stmt)){
																/* store result */
																mysqli_stmt_store_result($stmt);
																
																if(mysqli_stmt_num_rows($stmt) == 1){
																	$msg = "This email is already taken.";
																} else{
																	$email = trim($_POST["email"]);
																}
															} else{
																echo "Oops! Something went wrong. Please try again later.";
															}
														}
														 
														// Close statement
														mysqli_stmt_close($stmt);
													}
													
												// 	Validate password
													if(empty(trim($_POST["password"]))){
														$msg = "Please enter a password.";     
													} elseif(strlen(trim($_POST["password"])) < 6){
														$msg = "Password must have atleast 6 characters.";
													} else{
														$password = trim($_POST["password"]);
													}
													
													
													  // Validate username
													
													// Phone
													if(empty(trim($_POST["phone"]))){
														$msg = "Please enter your Phone Number.";     
													} elseif(strlen(trim($_POST["phone"])) < 9){
														$msg = "Phone number must be more up to 11 digits.";
													} else{
														$phone = trim($_POST["phone"]);
													}

                                                    	// Country
													if(empty(trim($_POST["country"]))){
														$msg = "Please enter your country.";     
													} elseif(strlen(trim($_POST["country"])) < 1){
														$msg = "Country must be more than 2 characters.";
													} else{
														$country = trim($_POST["country"]);
													}

													if(empty(trim($_POST["city"]))){
														$msg = "Please enter your City.";     
													} elseif(strlen(trim($_POST["city"])) <6){
														$msg = "city must be more than or up to 3 words.";
													} else{
														$city = trim($_POST["city"]);
													}

													if(empty(trim($_POST["address"]))){
														$msg = "Please enter your Address.";     
													} elseif(strlen(trim($_POST["address"])) < 5){
														$msg = "address must be more than or up to 3 words.";
													} else{
														$address = trim($_POST["address"]);
													}
													
												
													
													// Check input errors before inserting in database
													if(empty($msg)){
														
														
														 $fname= trim($_POST['fname']);
														 $dob= trim($_POST['dob']);
														
														// Prepare an insert statement
														$sql = "INSERT INTO users (fname, email, phone, country, city, address, dob, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
														 
														if($stmt = mysqli_prepare($link, $sql)){
															// Bind variables to the prepared statement as parameters
															mysqli_stmt_bind_param($stmt, "ssssssss", $param_fname, $param_email, $param_phone, $param_country, $param_city, $param_address, $param_dob, $param_password);
															
															// Set parameters
															$param_fname = $fname;
															$param_address = $address;
															$param_email = $email;
															$param_dob = $dob;
															$param_phone  = $phone;
															$param_country  = $country;
															$param_city  = $city;
															$param_password  = $password;
															
															
															// Attempt to execute the prepared statement
															if(mysqli_stmt_execute($stmt)){
															  
														   echo "<script>
                                                            window.location.href = './login.php?success';
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
    <link rel="stylesheet" href="./assets/css/signup.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="row">
        <!--Header-->
        <?php sigendout() ?>
        <!--Header-->
        <div>
        <div>
        <div class="row">
          <form class="col s11" method="post" accept-charset="UTF-8">
            <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
            <div class="row fieldRow">
              <div class="input-field col m6 s6" class="phoneEmail">
                <input
                  placeholder="Full Name"
                  name="fname"
                  type="text"
                  class="validate"
                />
              </div>
              <div class="input-field col m1 s1"></div>
              <div class="input-field col m3 s6" class="dob">
                <input
                  placeholder="D.O.B"
                  name="dob"
                  type="text"
                  class="validate"
                />
              </div>
              <div class="input-field col m2 s2"></div>
            </div>
            <div class="row fieldRow">
              <div class="input-field col m6 s6" class="phoneEmail">
                <input
                  placeholder="Phone Number"
                  name="phone"
                  type="text"
                  class="validate"
                />
              </div>
              <div class="input-field col m1 s1"></div>
              <div class="input-field col m5 s6" class="phoneEmail">
                <input
                  placeholder="Email"
                  name="email"
                  type="text"
                  class="validate"
                />
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12" class="address">
                <input
                  placeholder="Address"
                  name="address"
                  type="text"
                  class="validate"
                />
              </div>
            </div>
            <div class="row fieldRow">
              <div class="input-field col m6]3 s6" class="phoneEmail">
                <input
                  placeholder="Password"
                  name="password"
                  type="password"
                  class="validate"
                />
              </div>
              <div class="input-field col m1 s1"></div>
              <div class="input-field col m3 s6" class="dob">
                <input
                  placeholder="City"
                  name="city"
                  type="text"
                  class="validate"
                />
              </div>
              <div class="input-field col m1 s2"></div>
              <div class="input-field col m3 s6" class="dob">
                <input
                  placeholder="Country"
                  name="country"
                  type="text"
                  class="validate"
                />
              </div>
            </div>
            <div>
              <button class="clickNext" name="signup">
                <span class="nextText">Next</span>
                <i class="material-icons arrow">arrow_right</i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>

    <!--Footer-->
    <?php footer() ?>
    <!--Footer-->
</body>
</html>