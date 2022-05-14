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
       
        

    

    }else{
  
  
        header("location: ./post-product.php");
        }
}else{
    header('location: ./login.php');
    die();
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
    <link rel="stylesheet" href="./assets/css/messageSidebar.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/accountSidebar.css">
    <title>Message</title>
</head>
<body>
    <div class="row">
        <!--Header-->
        <?php nav() ?>
        <!--Header-->
        <!--Sidebar-->
       <?php accountSidebar() ?>
        <!--Sidebar-->
    
       <div class="col s12 m8">
        <div class="row card">
          <div>
            <span class="note">
              You have no messages yet
              <br />
              Find things to discuss or sell something
            </span>
          </div>
          <div class="clickLogin">
            <span class="loginText">Lend an item</span>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <?php footer() ?>
    <!--Footer-->
</body>
</html>