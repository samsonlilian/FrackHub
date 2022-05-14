<?php 
session_start(); 
include("part/frontend.php");
include "./conn.php";

if(isset($_SESSION['email'])){

    $email = $link->real_escape_string($_SESSION['email']);

    $sql1 = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){

        $row1 = mysqli_fetch_assoc($result);
        $fname = $row1['fname'];
        $lname = $row1['lname'];
        $email = $row1['email'];
        $info = $row1['info'];
        $phone = $row1['phone'];
        $username = $row1['username'];
        $password = $row1['password'];
       
        

    

    }else{
  
  
        header("location: ./post-product.php");
        }
}else{
    header('location: ./login.php');
    die();
}

if(isset($_POST['save'])){
 
   

    // Validate name
    if(empty(trim($_POST["password"]))){
        $msg = "Please enter your Password.";     
    } else{
        $upassword = $link->real_escape_string($_POST["password"]);
    }
    if(empty(trim($_POST["cpassword"]))){
        $msg = "Please Confirm your Password.";     
    } else{
        
    }
   

    



    
    // Check input errors before inserting in database
    if(empty($msg)){
        
        
               
        // Prepare an insert statement
        $sql1 = "UPDATE users SET password = '$upassword' WHERE email = '$email' ";
         
        if(mysqli_query($link, $sql1)){
          

               

          echo "<script>
           window.location.href='reset-password.php?success';
           </script>";  

            } else{
                $msg = "Something went wrong. Please try again later.";
            }
       
         
       
    }
    

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
    <link rel="stylesheet" href="./assets/css/account.css">
    <link rel="stylesheet" href="./assets/css/accountSidebar.css">
    <link rel="stylesheet" href="./assets/css/auth.css"">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <title>Reset Password</title>
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
      <?php accountSidebar() ?>
        <div class="col s6 m3"></div>
        <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
                                <?php if(isset($_GET['success']) && $msg == "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> Password updated successfully </div class='btn btn-success'>" ."</br>";  ?>
        <div class="col s6 m6 login">
          <div></div>
          <form method="post">
      <div class="username">
                <input
                  type="password"
                  class="inputUsername"
                  placeholder="Current Password"
                  value="<?php echo $password ;?>"
                />
              </div>
              <div class="username">
                <input
                  type="text"
                  class="inputUsername"
                  placeholder="New Password"
                  name="password"
                />
              </div>
              <div class="username">
                <input
                  type="text"
                  class="inputUsername"
                  placeholder="Confirm Password"
                  name="cpassword"
                />
              </div>

         <button type="submit" name="save" class="clickSubmit">
                <span class="loginText">Submit</span>
              </button>
          </form>
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