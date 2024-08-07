<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //var_dump($_POST);
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'];

   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color: whitesmoke;
            padding-top: 25%;
            margin: auto;
            width: 50%;
            border-radius: 20px;   
             padding: 100px;
        }
        p{
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>your personal information</h1>
    <p>FIRST NAME:<?php echo $first_name?> </p>
    <p>LAST NAME:<?php echo $last_name?> </p>
    <p>ADDRESS:<?php echo $address?> </p>
    <p>PASSWORD:<?php echo $password?> </p>
    <p>NUMBER:<?php echo $number?> </p>
    <p>DATE OF BIRTH:<?php echo $dob?> </p>
    <p>GENDER:<?php echo $gender?> </p>


    </div>





</body>
</html>