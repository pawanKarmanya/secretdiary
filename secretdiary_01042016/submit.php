<?php

session_start();

include("connect.php");

if (isset($_POST["login"])) {

    if ($_POST["login"] == "LogIn") {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "select * from diary where email='$email' and password='$password'";
        $resultlogin = mysqli_query($link, $query);
        $row1 = mysqli_fetch_array($resultlogin);
        if (!$row1) {

            $error = "Login Failed check the credentials ";
        } else {
            $_SESSION["id"] = $row1["sessionid"];
            $error = "Login Successful";

            header("Location:loginpage.php");
        }
    }
}

if (isset($_POST["signup"])) {
    if ($_POST["signup"] == "SignUp") {

        $emailsignup = $_POST["emailsignup"];
        $passwordsignup = $_POST["passwordsignup"];
        if (!($_POST["emailsignup"] == ""&&!($_POST["passwordsignup"]))) {
            $queryselect="select * from diary where email='$emailsignup' and password='$passwordsignup'";
            $resultselect=mysqli_query($link, $queryselect);
            $values=mysqli_fetch_array($resultselect);
            
if($values){
        $error="email already registered";
}
            
        else{    
            $query1 = "insert into diary(email,password) values ('$emailsignup','$passwordsignup')";
            $resultsignup = mysqli_query($link, $query1);
            
        }
        } 
        else 
        {
            $error = "Please enter Email and password to sign Up";
        }
        if (!isset($resultsignup))
        {
            $error = "Unable to sign up <br>".$error;
        } 
        if(!isset($error)){
            $message = "Sign up successful " . "Please login to use your secret diary";
        }
    }
}
?>