<?php  
    session_start();
    include 'config.php';
    if(!isset($_SESSION["user"])){
        header("location: sign-in.php");
    }else{
        if(isset($_POST['submit']) &&  $_POST['response_mess'] != '' ){
            $username=$_SESSION["user"];
            $response_mess=$_POST["response_mess"];
            $sql ="INSERT INTO user_response (username,response_mess) VALUES ('$username','$response_mess') ";
            $user_response=mysqli_query($conn,$sql);
            $_SESSION["announce"]="Thank for your feedback!";
            header("location: index.php");
        }else{
            $_SESSION["announce"]="Please fill in your feedback before submitting";
            header("location: index.php");
        }
    }
   
    
 ?>