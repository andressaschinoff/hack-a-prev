<nav class="nav-extended">
    <div class="nav-wrapper">
        <div class="container">
            <a href="./index.php" class="brand-logo">Time 60</a>
            <a href="mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <?php
                if (isset($_SESSION['username'])) {
                ?>
                    <li><a href='./user/index.php'> </a> </li>
                <?php
                } else {
                ?>
                    <li><a href="registration.php">Registrar</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav> <!-- Collect the nav links, forms, and other content for toggling -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="login.php">Login</a></li>
    <li><a href="registration.php">Registrar</a></li>
</ul>