<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="container">


<form>
  
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  
 
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  
 
  <button type="submit" name="login-btn" class="btn btn-primary">Submit</button>
</form>
<?php
   if (isset($_POST['login-btn'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];}
     
     echo"<h3> this is your: $name and this is your: $email</h3>"

   
  ?>

</div>
</body>
</html>