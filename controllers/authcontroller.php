<?php

require_once "model/authmodel.php";
require_once "function/function.php";

class AuthController{
  
  public function __construct()
  {
    global $url;
    session_start();
    if(isset($_SESSION['is_auth']) and $_SESSION['is_auth'] == true)
    {
      echo "<script>window.location.href = '".$url."/dashboard'</script>";
    }
  }

  static function viewlogin(){
    loadView('auth/login');
  }

  static function viewregister(){
      loadView('auth/register');
  }

  static function login(){
    global $url;
    $data = authmodel::getdata($_POST["username"]);
    session_start();
    $_SESSION["username"] = $data[0]['username'];
    $_SESSION["password"] = $data[0]['password'];
    //$_SESSION["id_user"] = $data[0]['id_user'];
    $_SESSION["is_auth"] = true;
    header('Location: '.$url.'/dashboard');
    exit();
  }

  static function register(){
    global $url;
    $data = authmodel::getdata($_POST["username"]);
    session_start();
    $_SESSION["username"] = $data[0]['username'];
    $_SESSION["nama_lengkap"] = $data[0]['nama_lengkap'];
    $_SESSION["password"] = $data[0]['password'];
    $_SESSION["no_hp"] = $data[0]['no_hp'];
    //$_SESSION["id_user"] = $data[0]['id_user'];
    $_SESSION["is_auth"] = true;
    header('Location: '.$url.'/dashboard');
    exit();
  }

  static function logout(){
    global $url;
    session_start();
    if(!isset($_SESSION['is_auth']))
    {
      echo "<script>window.location.href = '".$url."/login'</script>";
      exit();
    }
    session_unset();
    session_destroy();
    header('Location: '.$url.'/login');
  }
}