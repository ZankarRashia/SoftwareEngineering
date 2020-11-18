<!DOCTYPE html>
<html>
<?php

require 'dbh.inc.php';

session_start();
session_unset();
session_destroy();

header("Location: index.php");
?>

</html>