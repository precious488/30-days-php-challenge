<?php
include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding-top:100px
        }
        .container{
            margin: auto;
            width: 50%;
            padding: 10px;
            
            background-color:whitesmoke;
            border-radius:10px;
            
        }
        input{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            
        }
        button{
            background-color:green;
            border:none;
            width: 70px;
            height: 40px;
            border-radius:10px;
        }
        .result{
            margin: auto;
            width: 20%;
            padding: 10px;
            height:100px;
            background-color:lightblue;
            border-radius:10px;

        }
        p{
            text-align:center;
            font-size:3rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="number" name="num1" placeholder="enter the first numner"><br>

            <select name="operator" id="">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
                <option>sqrt</option>
                <option>^</option>
            </select><br>


            <input type="number" name="num2" placeholder="enter the first numner"><br>
            <button type="submit" name ="submit">compute</button><br>
        </form>
      
        
            
        <?php if(isset($_POST['submit'])==true):?>
                <div class="result">
                    <p><?php echo $value ?></p>
                </div>
        <?php endif;?>

    </div>
</body>
</html>