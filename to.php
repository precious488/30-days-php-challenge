<?php
session_start();
if (!isset($_SESSION['task'])){
    $_SESSION['task']=[];
    $_SESSION['starttime']=[];
    $_SESSION['endtime']=[];
}


if($_SERVER['REQUEST-METHOD']= 'POST'  && !empty($_POST['task']) && !empty($_POST['starttime']) && !empty($_POST['endtime'])){
    if(isset($_POST['submit'])){
        $_SESSION['task'][] = $_POST['task'];
        $_SESSION['starttime'][] =$_POST['starttime'];
        $_SESSION['endtime'][] =$_POST['endtime'];
    } 
    
    
}
if(isset($_GET['delete'])){
    $idindex = $_GET['delete'];
    
    //array_splice($_SESSION['task'], $idindex,1);
}
if(isset($_GET['edit'])){
    $idindex=$_GET['edit'];
    header('location:edit.php');
}

if(isset($_GET['more'])){
    $idindex = $_GET['more'];
    header('location:more.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
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
        .task{
             
            list-style: none;
            
        }
        a{
            text-decoration:none;
            margin:0;
            padding:0;
            font-weight:bold;
            color:white;

            

        }
        .btn{
            
            border-radius:4px;
            height: 20px;
            width: 50px;


        }
        .btn:hover{
            background-color:red;
        }
       
       
        .con{
            margin:auto;
            background-color:silver;
            width: 60%;
            padding: 10px;
            box-shadow: 10px 10px 10px 10px lightblue;
            margin-top:50px;
            border-radius:10px;

        }
        .float{
            float:right;
        }
  

    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="task">add-task</label>
            <input type="text" name="task">
            <label for="start date">start date</label>
            <input type="datetime-local" name="starttime">
            <label for="endate">End date</label>
            <input type="date" name="endtime">
            <button  class="btn2" type="submit" name="submit">add-task</button>
         
        </form>
      
    </div>
     
 
    
            <?php foreach($_SESSION['task'] as $index =>$task):?>
               <?php echo " 
               <div class='con'>
               <li class='task'>$task
                <div class='float'>
                    <button class='btn'><a href ='edit.php?edit=$index'>edit </a></button>
                    <button class='btn'><a href ='more.php?more=$index'>more </a></button>
                    <button class='btn'> <a href ='delete.php?delete=$index' >delete </a></div></button>
                   
                    

                </div>
                     "?>
               <?php endforeach?>
 

        
 

</body>
</html>