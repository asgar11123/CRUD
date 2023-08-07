<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h1>Fill the form</h1>
    <form action="insert.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="first_name" name="fname" >
  <label for="lname">Last name:</label>
  <input type="text" id="last_name" name="lname"><br> 
  <label for="email">email:</label><br> 
  <input type="email" id="email" name="email">
  <label for="college">College:</label>
  <input type="college" id="college" name="college"><br>
  <label for="branch">Branch:</label><br> 
  <input type="branch" id="branch" name="branch"><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 
</body> 
</html>