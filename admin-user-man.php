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
    <link rel="stylesheet" href="./assets/css/adminUserMan.css">
    <link rel="stylesheet" href="./assets/css/search.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/accountSidebar.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="row">
        <!--Header-->
        <?php nav() ?>
        <!--Header-->
        <div>
      <div class="row">
        <?php search() ?>
        <?php adminSidebar() ?>

        <div class="col s12 m8">
          <div class="row">
            <div class="col s6 m3 card">
              <div class="iconDiv">
                <span class="material-icons icon">groups</span>
              </div>
              <div>
                <span class="users">20 Users</span>
              </div>
            </div>
            <div class="col s6 m3 card">
              <div class="iconDiv">
                <span class="material-icons icon">groups</span>
              </div>
              <div>
                <span class="users">20 Users</span>
              </div>
            </div>
            <div class="col s6 m3 card">
              <div class="iconDiv">
                <span class="material-icons icon">settings</span>
              </div>
              <div>
                <span class="users">Settings</span>
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