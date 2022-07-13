<!DOCTYPE html>
<html>
<body>

<h2>Details</h2>

<form action='/createuser' method = "POST" enctype="multipart/form-data">@csrf
  <label for="fname">Full name:</label><br>
  <input type="text" id="fname" name="fname" placeholder= "Enter Full Name"><br>
  <?php if(isset($errors) && !empty($errors)) {
      echo $errors->first('fname'); 
    } ?><br>
  <label for="email">Email :</label><br>
  <input type="text" id = "email" name = "email" placeholder= "Enter Your Email"><br>
  <?php if(isset($errors) && !empty($errors)) {
      echo $errors->first('email'); 
    } ?><br>
  <label for="file">Image :</label><br>
  <input type="file" id = "file" name = "file" placeholder= "Select from Device"><br>
  <?php if(isset($errors) && !empty($errors)) {
      echo $errors->first('file'); 
    } ?><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html> 