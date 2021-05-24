<?php
    if(!isset($_SESSION['user']))
    {
       $_SESSION['no-login-message']="Please log in to access Admin Panel";
       header('location:'.SITEURL.'admin/login.php');

    }
?>