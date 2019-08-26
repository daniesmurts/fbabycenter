<?php
session_start();
session_destroy();
header("location:index.php");
/* remove all session variables
session_unset(); 

 destroy the session 
session_destroy();   */
?>