<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
<style>
  .container{
    border-radius: 30px;
    padding: 20px ;
    margin-top:70px;
    margin-left:370px
  }
  .solid {border-style: solid;
    border-radius: 20px
  }
  

</style>
</head>
<body>
  <div class="container">
 
  <form  class =" solid col-6 p-4 px-5" method= "post" action="..\controler\datasubmitting.php" >
  <h2 class = " text-primary text-center font-weight-bold">Welcome to login page</h2>
 
    <div class="form-group ">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name= "logon" >Login</button>
    <button type="Reset" class="btn btn-primary">Reset</button>
    <a class="btn btn-primary" href="signup.php" role="button">registor</a>
  </form>
  </div>
  </body>
  