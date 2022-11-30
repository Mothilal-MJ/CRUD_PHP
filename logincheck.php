<?php
session_start();

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = mysqli_connect('localhost','root','','crudoperation');
    $sql = "Select * from crud where email='$email' and password='$password'";
    $result = mysqli_query($con, $sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck !== 0)
    {
        $_SESSION['status_sucess'] = "Login Sucessful";
        // echo "Login Sucessful";
        header('location: login.php');
    }else{
        $_SESSION['status_incorrect'] = "Email or Password Incorrect";
        header('location: login.php');
    }
}
?>