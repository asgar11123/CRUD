
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
/* body {
  background: rgb(63,94,251);
} */

</style>
</head>
<body>

<h2>DATA Table</h2>

<table> 
  <!-- do not end this table  -->
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>email</th>
    <th>College</th>
    <th>Branch</th>
    <th>Operations</th>
  </tr>
  <!-- <button type="button" class="btn btn-primary"><a href="dummy.php"  class="text-light">Dummy</a></button>  -->


</body>


<?php include ("dbcon.php")?>

<?php

$sql="Select * from students"; 
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $fname=$row['first_name']; 
        $lname=$row['last_name'];
        $email=$row['email']; 
        $clg=$row['college'];
        $branch=$row['branch']; 
       // echo '<table>'; 
        echo ' <tr> 
        <th scope ="row">' .$id.'</th>
        <td>' .$fname. '</td>
        <td>' .$lname. '</td>
        <td>' .$email. '</td>
        <td>' .$clg. '</td>
        <td>' .$branch. '</td> 
        <td>
        
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"
        class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"
        class="text-light">Delete</a></button>


 
        
        </td>
           
        


        </tr>';  
       
          
      


 
      }

}

// <button type="button" class="btn btn-primary"><a href="">Edit</a></button> 
        // <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
?>
</html>
 