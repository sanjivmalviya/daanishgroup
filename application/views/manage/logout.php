
<?php 
    require_once('config/db.php');
    unset($_SESSION[SESSION_PREFIX]);
    header('location:index.php');
    exit;
?>
