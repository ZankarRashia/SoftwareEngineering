<?php
    session_start();
    //session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class = "nav-header-main">
            <h1 class="logo-name">Admin Portal</h1>
            <ul>                

            <?php
                if(isset($_SESSION['adminID'])) {

                    if($_SESSION['isSupportAdmin'] == 'Y')
                    {
                        echo '<li><a href="SupportAdminP.php">Support Admin</a></li>';
						
                    }
                    if($_SESSION['isFinanceAdmin'] == 'Y')
                    {
                        echo '<li><a href="FinanceAdminP.php">Finance Admin</a></li>';                       
                    }
					if($_SESSION['isSalesAdmin'] == 'Y')
                    {
                        echo '<li><a href="SalesAdminP.php">Sales Admin</a></li>';
                    }
					if($_SESSION['isHRAdmin'] == 'Y')
                    {
                        echo '<li><a href="HRAdminP.php">HR Admin</a></li>';                        
                    }
					if($_SESSION['isTechAdmin'] == 'Y')
                    {
                        echo '<li><a href="TechnologyAdminP.php">Tech Admin</a></li>';   
                    }
                }
            ?>

            </ul>
        </nav>
        <div class="header-login">
            <?php
                if(isset($_SESSION['adminID'])) {
                    echo '<form action="logout.inc.php" method="post">
                    <button class="logout-btn" type="submit" name="logout-submit">Logout</button>
                    </form>';
                }
                else {
                    echo '<form action="login.inc.php" method="post">
                    <input type="text" name="userName" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button class="login-btn" type="submit" name="login-submit">Login</button>
                    </form>';
                }
            ?>
        </div>
    </header>
</body>
</html>