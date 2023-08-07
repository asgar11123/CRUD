<?php include("dbcon.php") ?>


<?php

if(isset($_POST['submit'])){  //  With the help of post, data can flow from one php file to another php file 
    $fname=$_POST['fname'];  // storing form data in variables
    $lname=$_POST['lname'];  // these variables will be used for inserting in database table through SQL query 
    $email=$_POST['email'];
    $clg=$_POST['college'];   
    $branch=$_POST['branch'];


    //$query="insert into students "
    $query="INSERT INTO students (first_name,last_name,email,college,branch) VALUES ('$fname','$lname','$email','$clg','$branch')";

    $result=mysqli_query($conn,$query);   // this func returns true/false for successful/unsuccessful queries  
    
        if($result){
            echo "<script> alert('Successfully')</script>";  //script 
            header('location:display.php');
          }
          else{
            echo "<script> alert('Failed')</script>";
          }
        
    
}

?>