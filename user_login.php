<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
      height: 500px;
      border-radius: 4px;
    }
    .form-control{
      width: 500px;
    }
    
  </style>
</head>
<body>

<div class="container centered-block">

  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
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
