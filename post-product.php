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


												if($_SERVER["REQUEST_METHOD"] == "POST"){
 
													
													// Check input errors before inserting in database
													
														
														 $name= trim($_POST['name']);
														 $category= trim($_POST['category']);
														 $location= trim($_POST['location']);
														 $amount= trim($_POST['amount']);
														 $description= trim($_POST['description']);
														
														// Prepare an insert statement
														$sql = "INSERT INTO products (name, category, location, amount, description) VALUES (?, ?, ?, ?, ?)";
														 
														if($stmt = mysqli_prepare($link, $sql)){
															// Bind variables to the prepared statement as parameters
															mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_category, $param_location, $param_amount, $param_description);
															
															// Set parameters
															$param_name = $name;
															$param_category = $category;
															$param_location = $location;
                              $param_amount = $amount;
															$param_description = $description;
															
															
															// Attempt to execute the prepared statement
															if(mysqli_stmt_execute($stmt)){
															  
														   echo "<script>
                                                            window.location.href = './product-added.php';
                                                        </script>";   
															} else{
																echo "Something went wrong. Please try again later.";
															}
														}
														 
														// Close statement
														mysqli_stmt_close($stmt);

													
													// Close connection
													mysqli_close($link);
											
												}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
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
        <div class="row mainDiv">
          <div class="col s2 m2"></div>
          <div class="col s6 m8">
            <div class="row">
              <form class="col s12" method="post" accept-charset="UTF-8">
                <div class="row">
                  <div class="input-field col s12 sel">
                    <input
                      name="name"
                      type="text"
                      class="valnameate"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s5 sel">
                    <input
                      placeholder="Categories"
                      name="category"
                      type="text"
                      class="valnameate"
                    />
                  </div>
                  <div class="input-field col s2"></div>

                  <div class="input-field col s5 sel">
                    <input
                      placeholder="Location"
                      name="location"
                      type="text"
                      class="valnameate"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s5 sel">
                    <input
                      placeholder="amount"
                      name="amount"
                      type="number"
                      class="valnameate"
                    />
                  </div>
                  <div class="input-field col s2"></div>
                </div>
                <div class="row">
                  <div class="input-field col s12 details">
                    <textarea rows="10" cols="50" placeholder="Description"
                      name="description"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s5">
                    <!--<button class="clickNext">-->
                    <!--  <span class="nextText">Upload</span>-->
                    <!--  <i class="material-icons arrow">arrow_right</i>-->
                    <!--</button>-->
                  </div>
                  <div class="input-field col s2"></div>
                  <div class="input-field col s5">
                    <button class="clickNext" name="add">
                      <span class="nextText">Submit</span>
                      <i class="material-icons arrow">arrow_right</i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col s2 m2"></div>
        </div>
      </div>
    </div>
    </div>

    <!--Footer-->
    <?php footer() ?>
    <!--Footer-->
</body>
</html>