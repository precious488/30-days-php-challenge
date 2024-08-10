<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
             display: flex; 
             align-items: center; 
             justify-content: center; 
            padding: 200px;
            width: 70%;
            position:absolute;
       
           
        }
        .container{
            margin: auto;
            padding: 10px;
            border-radius: 20px;
            background-color: whitesmoke;
            box-shadow:10px 10px 5px  lightblue;

        }
        input{
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;

        }
        button{
            border-radius: 10px;
            background-color:green;
            width: 400px;
            height: 40px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        p{
            text-align: center;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>log in</p>
        <form action="validate.php" method="post">
            <label for="name">username:</label><br>
            <input type="text" name="username" placeholder="enter your name" ><br>
            <label for="password">password:</label><br>
            <input type="password" name="password" placeholder="enter your password" ><br>
            <small style="color: red">
        <?php 
            if(isset($_SESSION['passwordLower'])){
                echo $_SESSION['passwordLower'];
            }
            if(isset($_SESSION['passwordUpper'])){
                echo $_SESSION['passwordUpper'];
            }
            if(isset($_SESSION['passwordNumber'])){
                echo $_SESSION['passwordNumber'];
            }
        ?>   
        </small><br>
            <button type="submit" name="login">submit</button><br>
        </form>
        <small style="color: red">
        <?php 
            if(isset($_SESSION['username_and_password'])){
                echo $_SESSION['username_and_password'];
            }

            if(isset($_SESSION['length'])){
                echo $_SESSION['length'];
            }
        ?> 
          
        </small>
        <?php 
            if(isset($_SESSION['passwordLower'])){
                $_SESSION['passwordLower']="";
            }
            if(isset($_SESSION['passwordUpper'])){
                unset ($_SESSION['passwordUpper']);
            }
            if(isset($_SESSION['passwordNumber'])){
               unset($_SESSION['passwordNumber']);
            }
            if(isset($_SESSION['username_and_password'])){
                unset($_SESSION['username_and_password']);
             }
             if(isset($_SESSION['length'])){
                unset($_SESSION['length']);
             }
        ?> 
    </div>
</body>
</html>