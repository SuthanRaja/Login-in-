<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   header('Refresh: 1; URL = index.html');
?>
