<?php

session_start();

if(isset($_GET['more'])) {
    $idindex=$_GET['more'];
}
if (new DateTime() > new DateTime($_SESSION['endtime'][$idindex])) {
    $status ="completed"; 
}else{
    $status="pending";
}

//echo $status;

//echo $_SESSION['task'][$idindex];

//echo $_SESSION['starttime'][$idindex];
//echo "<br>";
//echo $_SESSION['endtime'][$idindex];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin:auto;
            background-color:whitesmoke;
            width: 50%;
            padding: 10px;
            background-color:whitesmoke;
            box-shadow: 10px 10px 10px 10px lightblue;
        }
        button{
            border-radius:4px;
            height: 20px;
            width: 50px;
             
            background-color:blue;
            border:none;

        }

        button:hover{
            background-color:red;
        }
        a{
            text-decoration:none;
            margin:0;
            padding:0;
            font-weight:bold;
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>start:<?php echo $_SESSION['starttime'][$idindex] ?> </p>
        <p>end:<?php echo $_SESSION['endtime'][$idindex] ?> </p>
        <p><?php echo $status?></p>
        <button><a href="to.php">back</a></button>

    </div>
</body>
</html>
