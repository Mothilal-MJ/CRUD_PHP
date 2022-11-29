<?php
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
        echo "Login Sucessful";
    }else{
        echo "Email or Password Incorrect";
    }

}

?>