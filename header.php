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
                    echo '<li><a href="checkout.php">Shopping Basket</a></li>';
                    echo '<li><a href="profile.php">Profile</a></li>';

                    if($_SESSION['isSupportAdmin'] == Y)
                    {
                        echo '<li><a href="ManageUserAccount.php">Manage User Accounts</a></li>';
                        echo '<li><a href="AssignRoles.php">Assign Roles</a></li>';
                        echo '<li><a href="HelpDesk.php">Help Desk</a></li>';
                    }
                    if($_SESSION['isFinanceAdmin'] == Y)
                    {
                        echo '<li><a href="FinanceReports.php">Finance Reports</a></li>';
						echo '<li><a href="AccountsPayable.php">Accounts Payable</a></li>';
						echo '<li><a href="AccountsReceivable.php">Accounts Receivable</a></li>';
						echo '<li><a href="Tax.php">Tax</a></li>';
                        
                    }
					if($_SESSION['isSalesAdmin'] == Y)
                    {
                        echo '<li><a href="SalesReports.php">Sales Reports</a></li>';
						echo '<li><a href="SalesLeads.php">Sales Leads</a></li>';
						echo '<li><a href="SalesDemo.php">Sales Demo</a></li>';
                        
                    }
					if($_SESSION['isHRAdmin'] == Y)
                    {
                        echo '<li><a href="NewHireOn-Boarding.php">New Hire On-boarding</a></li>';
						echo '<li><a href="Benefits.php">Benefits</a></li>';
						echo '<li><a href="Payroll.php">Payroll</a></li>';
						echo '<li><a href="Off-boarding.php">Off-boarding</a></li>';
						echo '<li><a href="HRReports.php">HR Reports</a></li>';
                        
                    }
					if($_SESSION['isTechAdmin'] == Y)
                    {
                        echo '<li><a href="ApplicationMonitoring.php">Application Monitoring</a></li>';
						echo '<li><a href="TechSupport.php">Tech Support</a></li>';
                        
                    }
                }
            ?>

            </ul>
        </nav>
        <div class="header-login">
            <?php
                if(isset($_SESSION['userid'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button class="logout-btn" type="submit" name="logout-submit">Logout</button>
                    </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Email Address">
                    <input type="password" name="pwd" placeholder="Password">
                    <button class="login-btn" type="submit" name="login-submit">Login</button>
                    </form>';
                }
            ?>
        </div>
    </header>
</body>
</html>