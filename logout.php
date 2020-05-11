<?php 

<!-- session will start here -->

session_start();

session_destroy();

echo "<script>window.open('index.php','_self')</script>";



?>