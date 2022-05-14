<?php 
include("part/frontend.php");
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
    <link rel="stylesheet" href="./assets/css/wallet.css">
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
    <div class="row">
        <div class="col s4 m4">
          <?php wallet() ?>
        </div>

        <div class="col s8 m7">
          <div class="cardTitle">
            <span class="walletText">Credit Card Information</span>
          </div>
          <div class="row">
            <div class="col s1 m1"></div>
            <div class="col s10 m10 main">
              <div class="side">
                <div class="textInfo">
                  <span class="textDetails">Card Number:</span>
                </div>
                <div class="username">
                  <input
                    type="text"
                    class="inputUsername"
                    placeholder=" "
                  />
                </div>
              </div>
              <div class="side">
                <div class="textInfo">
                  <span class="textDetails">Card Holder Name:</span>
                </div>
                <div class="cardHolder">
                  <input
                    type="text"
                    class="inputUsername"
                    placeholder=" "
                  />
                </div>
              </div>
              <div class="side">
                <div class="textInfo">
                  <span class="textDetails">Expiry Date:</span>
                </div>
                <div class="smallDiv">
                  <input
                    type="text"
                    class="inputUsername"
                    placeholder=" "
                  />
                </div>
              </div>
              <div class="side">
                <div class="textInfo">
                  <span class="textDetails">CVV:</span>
                </div>
                <div class="smallDiv">
                  <input
                    type="text"
                    class="inputUsername"
                    placeholder=" "
                  />
                </div>
              </div>
              <div class="side">
                <div class="textInfo">
                  <span class="textDetails">Amount:</span>
                </div>
                <div class="username">
                  <input
                    type="text"
                    class="inputUsername"
                    placeholder=" "
                  />
                </div>
              </div>
            </div>
            <div class="col s1 m1"></div>
          </div>
          <div class="clickSubmit">
            <span class="loginText">PAY</span>
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