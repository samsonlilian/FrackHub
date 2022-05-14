<?php 
include("part/frontend.php");
session_start(); 
include "conn.php";
										$msg = "";
                                      
                                        
                                        use PHPMailer\PHPMailer\PHPMailer;
                                        
                                        
                                        $email_err = $password_err= ""; 
                                        $email = $password= "";
                                        
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                         
                                          if (empty($_POST["email"])) {
                                            $msg = "Email is required";
                                          } else {
                                            $email = test_input($_POST["email"]);
                                            // check if e-mail address is well-formed
                                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                              $msg = "Invalid email format"; 
                                            }
                                          }
                                          
                                          
                                           if (empty($_POST["password"])) {
                                            $msg = "Password is required";
                                          } else {
                                            $password = test_input($_POST["password"]);
                                            // check if name only contains letters and whitespace
                                           
                                          }
                                            
                                                
                                            $email = $link->real_escape_string($_POST['email']);
                                            $password = $link->real_escape_string($_POST['password']);
                                            //$ip = $_SERVER['REMOTE_ADDR'];
                                            
                                            
                                            if($email == "" || $password == ""){
                                                $msg = "Email or Password fields cannot be empty!";
                                                
                                            }else {
                                                $sql=$link->query("SELECT id,email,password FROM users WHERE email='$email' AND password= '$password'");
                                                if($sql->num_rows > 0){
                                                    $data = $sql->fetch_array();
                                                
                                                        
                                                                 
                                                    
                                        
                                                            if($sql1 = "SELECT * FROM users WHERE email='$email'  AND password='$password'"){
                                        
                                                         $result1 = $link->query($sql1);
                                                         if(mysqli_num_rows($result1) > 0){
                                                             $row = mysqli_fetch_array($result1);
                                        
                                        
                                                         $_SESSION['email']=$_POST['email'];
                                                          
                                                             
                                       
                                                            header("location: index.php");
                                                                              
                                                          }else{
                                                              $msg = "Cannot Send!";
                                                          }
                                                      }
                                                            
                                                      
                                                      
                                                            
                                                            
                                                            
                                                            
                                                        
                                                         }
                                                    else{
                                                        
                                                        $msg = "Email or Password incorrect!";
                                                    }
                                                }
                                                }
                                                     
                                                
                                                
                                            
                                            
                                        
                                        function test_input($data) {
                                          $data = trim($data);
                                          $data = stripslashes($data);
                                          $data = htmlspecialchars($data);
                                          return $data;
                                        }
//Add Applicant details to eRegister record
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
    <link rel="stylesheet" href="./assets/css/auth.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <!--Header-->
        <?php sigendout() ?>
        <!--Header-->
        <div>
        <div>
        <div class="row">
          <div class="col s6 m3"></div>
          <div class="col s6 m6 login">
            <form class="white" id="loginform" method="post">
               <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
               <?php if(isset($_GET['success']) && $msg == "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> You have successfully registered. Kindly login.</div class='btn btn-success'>" ."</br></br>";  ?>
              <div class="password">
                <input
                  type="email"
                  class="inputUsername"
                  placeholder="Email"
                  name="email"
                />
              </div>
              <div class="password">
                <input
                  type="password"
                  class="inputUsername"
                  placeholder="password"
                  name="password"
                />
              </div>

              <button class="clickLogin" name="login_btn"id="wp-submit">
                <span class="loginText">login</span>
              </button>

              <div>
                <span class="forgotPassword">
                  forgotten password? click here to
                  <font color="#F47806">
                    <a href="./reset-password.php">reset</a>
                  </font>
                </span>
              </div>

              <div class="signUpDiv">
                <span class="signUp">
                  need an account?
                  <font color="#F47806">
                    <a href="./signup.php"> sign up</a>
                  </font>
                </span>
              </div>
            </form>
          </div>
          <div class="col s6 m3"></div>
        </div>
      </div>
    </div>
    </div>

    <!--Footer-->
    <?php footer() ?>
    <!--Footer-->
</body>
</html>