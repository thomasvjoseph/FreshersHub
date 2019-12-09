<?php
session_start();
//session manager
function setSession($key, $value){

    $_SESSION[$key] =$value;}
function getSession($key){
    if(isset($_SESSION[$key]))
    {
      return $_SESSION[$key];
    }
    return false;
}
function delSession($key)
{
	unset($_SESSION[$key])
;}