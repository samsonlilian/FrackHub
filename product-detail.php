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
       
        

    

    }else{
  
  
        header("location: ./login.php");
        }
}else{
    header('location: ./login.php');
    die();
}


  $sql= "SELECT * FROM products WHERE id = '$id'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);

      
        
          
          

        }
        
    //     $sql= "SELECT * FROM products WHERE id = '$id'";
			 // $result = mysqli_query($link,$sql);
			 // if(mysqli_num_rows($result) > 0){
    //       $row = mysqli_fetch_assoc($result);

      
    //       $name =  $row['name'];
          
          

    //     }
				//   if(isset($row['name'])  && isset($row['category']) && isset($row['description']) ){
    //                   $name;
    //                   $category;
				//   }else{
           
    
    //           $name =  '';

    //             $category =  '';
    //       }
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
    <link rel="stylesheet" href="./assets/css/postproduct.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="row">
        <!--Header-->
        <?php nav() ?>
        <!--Header-->
        <div>
      <div>
       <div class="row">
        <div class="col s12 m4">
          <div class="sidebar">
            <div>
              <img src='https://pngimg.com/uploads/book/book_PNG2105.png' height="400px" width="400px" />
            </div>
          </div>
        </div>
        <div class="col s12 m8">
          <div class="row card">
            <div>
              <span class="note">
                <?php echo  $row['name'] ;?>
                <b>$<?php echo  $row['amount'] ;?></b>
              </span>
            </div>
            <div>
              <span class="lendingPeriod">
                Lending time:
                <b>3 day</b>
              </span>
            </div>
            <div>
              <p class="des">
                <?php echo  $row['description'] ;?>
              </p>
            </div>
            <div class="clickLogin">
              <a href="index.php"> <span  class="loginText">Borrow item</span> </a> 
            </div>
          </div>
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