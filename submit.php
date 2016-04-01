<?php

include("connect.php");
if(isset($_POST["login"])){
    
if($_POST["login"]=="LogIn"){
   
    $email=$_POST["email"];
    $password=$_POST["password"];
    
$query="select * from diary where email='$email' and password='$password'";
$resultlogin=mysqli_query($link,$query);
$row1=mysqli_fetch_array($resultlogin);    
if(!$row1){

    $error= "Login Failed check the credentials ";
    
}  
 else {
     
     $error= "Login Successful";
        
    header("Location:loginpage.php");
}
}}

if(isset($_POST["signup"])){
if($_POST["signup"]=="SignUp"){
    
    $emailsignup=$_POST["emailsignup"];
    $passwordsignup=$_POST["passwordsignup"];
    $query="insert into diary(email,password) values ('$emailsignup','$passwordsignup')";
$resultsignup=mysqli_query($link, $query);
if(!$resultsignup){
    $error="Unable to sign up";
    
}
else{
    $message="Sign up successful"."Please login to use your secret diary";
}
}
}

?>