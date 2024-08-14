<?php
include 'to.php';
if(isset($_GET['delete'])){
    $idindex = $_GET['delete'];
    
    array_splice($_SESSION['task'], $idindex,1);
    header('location:to.php');
    
}
