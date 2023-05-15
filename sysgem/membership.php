<?php
require_once "sysgem/DB_Hacker.php";
function registerUser($username,$email,$password){
    if(usernameCheck($username) && emailCheck($email) && passwordCheck($password)){
       return insertUser($username,$email,$password);
    }else{
        echo "Fail";
    }
}

function usernameCheck($username){
    if(strlen($username) >= 6){
        $bol = preg_match('/^[\w]+$/',$username);
        return $bol;
    }else{
        return false;
    }
}
function emailCheck($email){
    if(strlen($email) >= 15){
        $bol = preg_match('/[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/',$email);
        return $bol;
    }else{
        return false;
    }
}
function passwordCheck($password){
    if(strlen($password) >= 15){
        $bol = preg_match('/(?=.*[a-z])(?=.*[A-Z](?=.*(_|[^\w]))(?=.*[\d]))/',$password);
        return $bol;
    }else{
        return false;
    }
}

// $bol = passwordCheck("Chocho23@theint12");
// echo $bol ? "TRUE" : "FALSE";
// 
?>