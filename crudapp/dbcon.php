<?php
// for connecting db, we need 4 variables as given below

    $localhost="localhost:4306";
    $username="root";
    $password="";
    $database="crud_operations";

    $conn= mysqli_connect($localhost,$username,$password,$database);
    if(!$conn){
        die("Connection Failed");
    }
    // else{
    //     echo "yes"; 
    // }



?>