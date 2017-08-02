<?php
/**
 * Created by PhpStorm.
 * User: hchauvel
 * Date: 02/08/2017
 * Time: 11:01
 */
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/config/config_bdd.php');
if($_POST["inscription"]==1)
{
    $d = $_POST['day'];
    if(strlen($d) <2)
    {
        $d = "0".$d;
    }
    $inscription=$db->prepare("INSERT INTO user (login, email, password, gender, sports, birthdate) 
    VALUES (:login, :email, :password, :gender, :sports, :birthdate)");
    $inscription->execute(array(
        'login'=>$_POST['login'],
        'email'=>$_POST['email'],
        'password'=>$_POST['password'],
        'gender'=>$_POST['gender'],
        'sports'=>$_GET['sports'],
        'birthdate'=>$_POST['year'].$_POST['month'].$d
    ));
    $infos_user=array(
        'id'=>$db->lastInsertId(),
        'login'=>$_POST['login'],
        'email'=>$_POST['email'],
        'password'=>$_POST['password'],
        'gender'=>$_POST['gender'],
        'sports'=>$_GET['sports'],
        'birthdate'=>$_POST['year'].$_POST['month'].$d,
        'rang'=>0
    );
    $_SESSION['infos_user']=$infos_user;

    header("Location: accueil.php");
}
?>