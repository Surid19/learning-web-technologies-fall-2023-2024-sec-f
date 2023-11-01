<?php 
    session_start();
    $id=$_REQUEST['user_id'];
    $password =$_REQUEST['password'];
    $confirm_password=$_REQUEST['confirm_password'];
    $username =$_REQUEST['username'];
    $user= $_REQUEST['user'];
    $admin=$_REQUEST['admin'];

    if($id == "" || $password == ""|| $confirm_password == "" || $username== "" ){
        echo "null username or password or email!";
    }
     else if($user== "user") {
        $user = [ 'user_id'=> $user_id, 'password'=> $password, 'confirm_password'=> $confirm_password,'username'=> $username ];
        $_SESSION['user'] = $user;
        header('location: login.html');  
    }
    else if( $admin== 'admin') {
        $admin = [ 'user_id'=> $user_id, 'password'=> $password, 'confirm_password'=> $confirm_password,'username'=> $username ];  
        $_SESSION['admin'] = $admin;
        header('location: login.html');  
    }
    else {
        echo "Check your inputs";  
    }
?>