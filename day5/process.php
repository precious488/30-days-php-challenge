<?php
$num =rand(1,10);

    if(isset($_POST['submit'])){
        $guest= $_POST['guest'];

        switch($guest){
            case($guest < $num):
                $result= "failed your number is lessthen the answer";
                break;
            case($guest > $num):
                $result= "your number is greater the answer";
                break;
            case($guest == $num):
                 $result= "congratulations you are correct";
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
</head>
<body>
    <div class="contaner">
        <form action="" method=post>
        <p>guest a number</p>
        <input type="number" name="guest" value="">
        <button type="submit" name=submit>submit</button>
        <p><?php echo $value?></p>
        </form>
    </div>
</body>
</html>
