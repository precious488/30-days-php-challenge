<?php
session_start();
if (!isset($_SESSION['task'])){
    $_SESSION['task']=[];
}


if($_SERVER['REQUEST-METHOD']= 'POST' && !empty($_POST['task'])){
    if(isset($_GET['edit'])){
        $idindex=$_GET['edit'];
    }
    $idindex=$_GET['edit'];
        $_SESSION['task'][$idindex] = $_POST['task'];
        header('location:to.php');
       
    
    
}
$idindex=$_GET['edit'];
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
        input{
            width: 100%;
            padding: 12px 20px;
           margin: 8px 0;
           box-sizing: border-box;
        }
        button{
           
            background-color:blue;
            border:none;
        }
    </style>
</head>
<body>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="task">edit-task</label>
            <input type="text" name="task" value="<?php echo $_SESSION['task'][$idindex] ?>" >
            <label for="start date">start date</label>
            <input type="datetime-local" name="starttime">
            <label for="endate">End date</label>
            <input type="date" name="endtime">
            <button  class="btn2" type="submit" name="submit">edit</button>
         
        </form>
      
    </div>
     
</body>
</html>