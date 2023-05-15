<?php
session_start();
function setSession($key,$value){
    $_SESSION[$key] = $value;
}
function checkSession($key){
    return $_SESSION[$key];
}