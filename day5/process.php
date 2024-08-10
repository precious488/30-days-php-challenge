<?php
session_start();
$_SESSION =rand(1,100);

    if(isset($_POST['submit'])){
        $guest= $_POST['guest'];

        switch($guest){
            case($guest < $_SESSION):
                $result= "too low";
                break;
            case($guest > $_SESSION):
                $result= "too high";
                break;
            case($guest == $_SESSION):
                 $resul="correct!";
                 break;
            default:
                $result="enter a number";
            }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding-top:200px;
        }
        .contaner{
            margin:auto;
            width: 30%;
            padding: 10px;
            background-color:whitesmoke;
            box-shadow: 10px 10px 10px 10px lightblue;
        }
        form{
            padding-left:15%;
        }
        input{
            width: 100%;
            padding: 12px 20px;
           margin: 8px 0;
           box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="contaner">
        <form action="" method=post>
        <p>guest a number</p>
        <input type="number" name="guest" value=""><br>
        <button type="submit" name=submit>submit</button>
        <p><?php echo $result?></p>
        </form>
    </div>

</body>
</html>
