<?php

include 'config.php';

$task = $_POST['task'];

$sql = "INSERT INTO tasks(titulo) VALUES ('$task')";
$result = mysqli_query($conn, $sql);

if($result){
   echo 1;
} else{
    echo 0;
}

?>