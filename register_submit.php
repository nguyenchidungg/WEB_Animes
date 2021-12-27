<?php
    session_start();
    include 'config.php';
    if(isset($_POST['submit']) && $_POST["email"] != '' && $_POST["username"] != ''&& $_POST["password"] != '' &&$_POST["repassword"] != ''){
        $email=$_POST["email"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        if($password != $repassword){
            $_SESSION["announce"]="Re-entered password does not match";
            header("location:sign-up.php");
        }
        $sql="SELECT * FROM user WHERE username='$username'";
        $old= mysqli_query($conn,$sql);
        $password=md5($password);
        $repassword=md5($repassword);
        if(mysqli_num_rows($old)>0){
            $_SESSION["announce"]="User name already exist";
            header("location:sign-up.php");
        }
        if($password == $repassword && mysqli_num_rows($old)==0){
            $sql="INSERT INTO user (username,password,email) VALUES ('$username','$password','$email')";
            mysqli_query($conn,$sql);
            $_SESSION["announce"]="Register susscessed!";
            header("location:sign-in.php");
        }
        
    }else{
        $_SESSION["announce"]="Please enter full information";
        header("location:sign-up.php");
    }

?>