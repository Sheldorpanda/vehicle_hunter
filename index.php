<?php
  //  if(!isset($_COOKIE['loggedin'])){
    //    header("Location: login.php");
    //}
    
    session_start();
    if(!isset($_SESSION['loggedin'])){
       
        header('Location: login.php');
    }
    header('Location: firstPage.php');
    
    //close out the session
    $_SESSION = array();
    session_destroy();


?>