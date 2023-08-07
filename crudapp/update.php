<?php include("dbcon.php") ?>
<?php 
    //we are getting respective url through get method, and we will use that id to fetch. ?>
<?php
$id=$_GET["updateid"]; // alpha line
$sql="Select * from students where id=$id"; //these lines of code are for auto filling the update form
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_assoc($result);
$fname=$row['first_name'];  // we are storing values of parti row in variable 
$lname=$row['last_name'];  // these variables will be used as value in html form 
$email=$row['email'];
$clg=$row['college'];
$branch=$row['branch']; 

if(isset($_POST['submit'])){  //  With the help of post, data can flow from one php file to another php file 
    $fname=$_POST['fname'];  // storing form data in variables
    $lname=$_POST['lname'];  // these variables will be used for inserting in database table through SQL query 
    $email=$_POST['email'];
    $clg=$_POST['college'];   
    $branch=$_POST['branch'];


    //$query="insert into students "
    $query=" update students set id=$id, first_name='$fname', 
    last_name='$lname', email='$email',college='$clg', 
    branch='$branch' where id=$id ";   

    $result=mysqli_query($conn,$query);   // this func returns true/false for successful/unsuccessful queries  
     
        if($result){
           
           // echo "Updated Successfully";
            header("location:display.php");
          }
          
    
} 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h1>Fill the form</h1>
    <form action="" method="POST">
        <!-- here action is this page only, after clicking submit, control goes to 
    alpha line and then works as written in the code -->
  <label for="fname">First name:</label><br>
  <input type="text" id="first_name" name="fname" value =<?php echo $fname;?>>
  <label for="lname">Last name:</label>
  <input type="text" id="last_name" name="lname" value=<?php echo $lname;?>><br> 
  <label for="email">email:</label><br> 
  <input type="email" id="email" name="email" value=<?php echo $email;?>>
  <label for="college">College:</label>
  <input type="college" id="college" name="college" value=<?php echo $clg;?>><br>
  <label for="branch">Branch:</label><br> 
  <input type="branch" id="branch" name="branch" value=<?php echo $branch;?>><br><br>
  <input type="submit" name="submit" value="Update">
</form> 
</body> 
</html>   











