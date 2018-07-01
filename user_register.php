<?php require('function.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- bootstrap css ends-->
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- custom css-->
  <style type="text/css">
  body{
    background-image: url('img/background.png');
  }
    .centered-block{
      padding: 50px;
      margin: 0 auto;
      background-color:#FFFFFF; 
      width: 700px;
      height: 700px;
      border-radius: 4px;
    }
    .form-control{
      width: 500px;
    }
    
  </style>
</head>
<body>

<div class="container centered-block">
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['image']) && isset($_POST['address'])){
      
      $firstname = mysql_real_escape_string(trim($_POST['firstname']));
      $lastname = mysql_real_escape_string(trim($_POST['lastname']));
      $email = trim($_POST['email']);
      $password = mysql_real_escape_string(trim($_POST['password']));
      $gender = mysql_real_escape_string(trim($_POST['gender']));
      $image = mysql_real_escape_string(trim($_POST['image']));
      $address = mysql_real_escape_string(trim($_POST['address']));



      

      $query_input = "INSERT INTO user (email,password,firs_name,last_name,image,address,gender) VALUES('$email','$password','$firstname','$lastname','$image','$address','$gender')";
      if($result_input = insert_fun($query_input))
      {
        echo "done";
      }
      else{
        echo "not";
      }
    
      


   }
   else{
    echo "hello";
   }
  }
  else{
    echo "his";
  }
?>


  
   <?php 
   if (isset($result_input)) {
    if ($result_input==1) {
   
   
   
    ?>
    <p class="alert alert-success success-edit">Product Added to the database</p>
   <?php  
  }
   } 
   ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
  </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea type="text" rows="3" name="address" class="form-control" id="address"></textarea>
    </div>
    <div class="form-group">
      <label for="sel1">Gender:</label>
      <select class="form-control input-sm" name="gender" id="sel1">

        <option>Male</option>
        <option>felmale</option>

       
      </select>
      </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file"  id="image" name="image">
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>



  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <!-- jquery ends -->

  <!-- bootstrap javascript-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- bootstrap javascript ends -->
  <!--custom js-->

</body>
</html>
