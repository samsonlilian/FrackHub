<?php

function nav() {
$nav = print <<<HERE

<!--nav-->
        <div>
            <nav class="navdesk" role="navigation">
                <div class="nav-wrapper container">
                    <div class="logo">
                        <a id="logo-container" href="index.php" class="brand-logo">
                            <span class="log">Frack Hub</span>
                        </a>
                    </div>
                    <div>
                        <ul class="right hide-on-med-and-down blue-text">
                            <li class="li">
                                <a href="./message.php"><div class="menu">
                                    <i class="material-icons">message</i>
                                </div></a>
                            </li>
                    
                            <li class="li">
                                <div class="menu">
                                    <i class="material-icons">notifications</i>
                                </div>
                            </li>
                    
                            <li class="li">
                                <a href="./post-product.php"><div class="menu">
                                    <i class="material-icons">app_registration</i>
                                </div></a>
                            </li>
                            <li class="li">
                                <a href="./logout.php"><div class="menu">
                                    <i class="material-icons">logout</i>
                                </div></a>
                            </li>
                    
                            <li class="li">
                                <a href="./lending-status.php"><div class="lend">
                                    <span>LEND</span>
                                </div></a>
                            </li>
                        </ul>
                    
                        <ul id="nav-mobile" class="sidenav">
                            <li>
                                <a href="#">Navbar Link</a>
                            </li>
                            <li>
                                <a href="#">Navbar Link</a>
                            </li>
                            <li>
                                <a href="#">Navbar Link</a>
                            </li>
                            <li>
                                <a href="#">Navbar Link</a>
                            </li>
                        </ul>
                        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!--nav-->

HERE;
return $nav;
}

function sigendout() {
$sigendout = print <<<HERE

<!--nav-->
        <div>
            <nav class="navdesk" role="navigation">
                <div class="nav-wrapper container">
                    <div class="logo">
                        <a id="logo-container" href="index.php" class="brand-logo">
                            <span class="log">Frack Hub</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!--nav-->

HERE;
return $sigendout;
}

function sidebar() {
$sidebar = print <<<HERE

<div class="col s12 m3">
            <div class="sidebar">
            <a href="categories.php">
                <div class="top">
                    <span class="categories">Categories</span>
                </div>
                </a>
                <a href="./books.php">
                <div class="button">
                    <span class="button-text">books</span>
                </div>
                </a>
                <a href="outdoor.php">
                <div class="button">
                    <span class="button-text">outdoor</span>
                </div>
                </a>
                <a href="tools.php">
                <div class="button">
                    <span class="button-text">tools</span>
                </div>
                </a>
                <a href="clothes.php">
                <div class="button">
                    <span class="button-text">clothes</span>
                </div>
                </a>
            </div>
        </div>

HERE;
return $sidebar;
}

function footer() {
$footer = print <<<HERE

<div>
        <footer class="page-footer">
            <div class="footer-copyright footerDiv">
                <div class="container footerText">© 2022 FRACKHUB</div>
            </div>
        </footer>
    </div>

HERE;
return $footer;
}

function search() {
$search = print <<<HERE
 <div>
      <div class="searchbox">
        <input
          type="text"
          class="inputUsername"
          placeholder="Current Email"
        />
      </div>
    </div>
HERE;
return $search;
}

function adminSidebar() {
$adminSidebar = print <<<HERE

  <div>
      <div class="col s12 m3">
        <div class="sidebar">
          <div class="button">
            <span class="button-text">User Management</span>
          </div>
          <div class="button">
            <span class="button-text">Dispute Management</span>
          </div>
          <div class="button">
            <span class="button-text">Settings</span>
          </div>
        </div>
      </div>
    </div>

HERE;
return $adminSidebar;
}

function accountSidebar() {
$accountSidebar = print <<<HERE

 <div>
      <div class="col s12 m3">
        <div class="sidebar">
          <div class="topButton">
            <span class="button-text">GO BACK TO DASHBOARD</span>
            <i class="material-icons arrow">arrow_left</i>
          </div>
          <a href="change-name.php">
          <div class="button">
            <span class="button-text">Change Name</span>
          </div>
          </a>
          <a href="change-email.php">
          <div class="button">
            <span class="button-text">Change Email</span>
          </div>
          </a>
          <a href="reset-password.php">
          <div class="button">
            <span class="button-text">Change Password</span>
          </div>
          </a>
          <div class="button">
            <span class="button-text">Delete Account</span>
          </div>
        </div>
      </div>
    </div>

HERE;
return $accountSidebar;
}

function wallet() {
$wallet = print <<<HERE

    <div>
      <div class="col s12">
        <div class="wallet">
          <span class="walletText">Wallet</span>
        </div>
        <div class="sidebar">
          <span class="balance">$100</span>
        </div>
      </div>
    </div>

HERE;
return $wallet;
}

?>