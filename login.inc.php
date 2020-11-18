<?php
if(isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if(empty($userName) || empty($password)) 
    {
        header("Location: header.php?error=emptyfields");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM admin WHERE userName = '$userName';";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: header.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                if ($password != $row['password'])
                {
                    header("Location: header.php?error=wrongpassword");
                    exit();
                }
                else if($password == $row['password'])
                {
                    session_start();
                    $_SESSION['adminID'] = $row['adminID'];
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['isSupportAdmin'] = $row['isSupportAdmin'];
                    $_SESSION['isFinanceAdmin'] = $row['isFinanceAdmin'];
					$_SESSION['isSalesAdmin'] = $row['isSalesAdmin'];
					$_SESSION['isHRAdmin'] = $row['isHRAdmin'];
					$_SESSION['isTechAdmin'] = $row['isTechAdmin'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['name'] = $row['name'];
					
                    header("Location: portal.php?loginr=success");
                    exit();
                }
                else
                {
                    header("Location: header.php?error=wrongpassword");
                    exit();
                }
            }
            else {
                header("Location: header.php?error=sqlerror");
                exit();
            }
        }
    }

}

else {
    header("Location: portal.php");
    exit();
}
?>