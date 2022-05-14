    <?php 
    include("part/frontend.php");
    session_start(); 
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

    if(isset($_POST['delete'])){
        
        
        $email =$link->real_escape_string( $_POST['email']);
            
            
        $sql1 = "DELETE FROM product  WHERE id ='$id'";
        
        if (mysqli_query($link, $sql1)) {
            $msg = "Record Deleted successfully  !";
                
            
        } else {
            $msg = "Cannot delete Product! ";
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
        <link rel="stylesheet" href="./assets/css/product.css">
        <link rel="stylesheet" href="./assets/css/sidebar.css">
        <link rel="stylesheet" href="./assets/css/footer.css">
        <link rel="stylesheet" href="./assets/css/nav.css">
        <title>Clothings</title>
    </head>
    <body>
        <div class="row">
            <!--Header-->
            <?php nav() ?>
            <!--Header-->
            <!--Sidebar-->
            <div class="col s12 m3">
                <div class="sidebar">
                    <div class="top">
                        <span class="categories">Categories</span>
                    </div>
                    <div class="button">
                        <span class="button-text">books</span>
                    </div>
                    <div class="button">
                        <span class="button-text">outdoor</span>
                    </div>
                    <div class="button">
                        <span class="button-text">tools</span>
                    </div>
                    <div class="button">
                        <span class="button-text">clothes</span>
                    </div>
                </div>
            </div>
            <!--Sidebar-->
        
            <div class="col s12 m7" class="mainAll">
                <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
                <div class="mainContainer">
                <?php 
                        //              $sql= "SELECT * FROM products ORDER BY id DESC";
            //	  $result = mysqli_query($link,$sql);
                // if(mysqli_num_rows($result) > 0){
                //	  while($row = mysqli_fetch_assoc($result)){  
            
            
                //	  ?>
                        <form  action="index.php" method="POST">
                    <div class="col s6 m3 imgContainer">
                        <img class="img" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" />
                        <span class="productTitle"><?php echo $row['name'];?></span>
                        <p />
                        <span class="productPrice">$<?php echo $row['amount'];?></span>
                        <td> <a href="product-detail.php?id=<?php echo $row['id']?>"> 
                                                <button type="button" name="view" style="width:100%" class="btn btn-primary"><span class="fa fa-eye">-View </span></button></a></td>
                    </div>
                                                </form>
                    <?php    

    ?>
                </div>
            </div>
        </div>

        <!--Footer-->
        <?php footer() ?>
        <!--Footer-->
    </body>
    </html>