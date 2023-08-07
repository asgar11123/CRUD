<?php include("dbcon.php")?>
<?php

if(isset($_GET["deleteid"]))
{
    $id=$_GET["deleteid"];
    $sql="Delete from students where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo "Deleted successfully";
        header('location:display.php');
    } 
    else{
        die(mysqli_error($conn));
    }
} 






?>