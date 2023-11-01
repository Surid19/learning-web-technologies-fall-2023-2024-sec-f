<?php 
    session_start();
    $user_id = $_REQUEST['user_id'];
    $password = $_REQUEST['password'];

    if($user_id == "" || $password == "" ){
        echo "null user ID or password!";

    }
    else if ($user_id == $_SESSION['user']['user_id'] && $password == $_SESSION['user']['password']){
        
        setcookie('flag', 'true', time()+3600, '/');
        header('location: home.php');
    }
         else if ($user_id == $_SESSION['admin']['user_id'] && $password == $_SESSION['admin']['password']){
            setcookie('flag', 'true', time()+3600, '/');
            header('location: home.php');
          }
          
        else{
        echo "invalid user!";
       }
?>