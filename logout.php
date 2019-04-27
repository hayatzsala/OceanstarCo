<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:Login.php");
}
session_start();
session_unset();
session_destroy();
header("location: index.php");
exit();
?>