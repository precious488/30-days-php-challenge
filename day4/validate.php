<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        validate($username, $password);
    
        header("location: login.php");
        

       
    } 
}       



    


function validate(string $username, string $password){
    
    if($password == '' || $username == ''){ // checks for empty password: GOOD
        $_SESSION["username_and_password"] ="Username and Password can not be empty";
    }

    if(strlen($password) < 8){
        $_SESSION["password_length"] = "Password can not be less than 8 characters";
    }

    if(strlen($username) < 5 || strlen($username) > 15 ){
         $_SESSION["username_length"] = "Username must be between 5 and 15 characters";
    }

    if(hasSpecialChars($password) == 0){
         $_SESSION["passwordSpecialChar"] = "The password must have a special char";
    }
        

    $hasLowerCase = false;
    $hasNumber = false;
    $hasUpperCase = false;

    for($count=0; $count < strlen($password); $count++){
        if(ctype_lower($password[$count])){
            $hasLowerCase = true;
        }
        if(ctype_upper($password[$count])){
            $hasUpperCase = true;
        }
        if(ctype_digit($password[$count])){
            $hasNumber = true;
        }
    }

    if(!$hasLowerCase){
        $_SESSION["passwordLower"] = "Password must have at least 1 lowercase";
    }

    if(!$hasNumber){
        $_SESSION["passwordNumber"] = "Password must have at least 1 number";
    }

    if(!$hasUpperCase){
        $_SESSION["passwordUpper"] = "Password must have at least 1 uppercase";
    }


}


function hasSpecialChars($str) {
    return preg_match('/[^a-zA-Z0-9]/', $str) > 0;
}

