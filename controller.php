<?php
session_start();
//start the session
require_once('model.php');
if(isset($_POST['search']) && $_POST['search'] == 'found'){
    
    $model = $_POST['model'];
    $year = $_POST['year'];
    $make = $_POST['make'];
    
    $model = new Model();
    $model->verify_search($make, $model, $year);
    
}

if(isset($_POST['cmd']) && $_POST['cmd'] == 'login'){
    //check out the user can login
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    $model = new Model();
    try{
        $login = $model->verify_login($user,$password);
        setcookie('loggedin','yes');
        
        $_SESSION['loggedin'] = true;
    }catch(Exception $e){
        header("Location:login.php");    
    }
    // echo ("Wrong Password & Username Combination!");
    header("Location:index.php");
}else{
    //they did not submit the form
    header("Location:login.php");
}


?>