<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>

<head>
  <?php include './head.html' ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/loginstyle.css">
</head>
<body>
<form action="../controllers/RegistrationController.php" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Email address</label>  
  <input name="email" type="email" id="form2Example1" class="form-control" required/>
    
  </div>

  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Username</label>  
  <input name="username" type="text" id="form2Example2" class="form-control" required/>
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example3">Password</label>  
  <input name="password" type="password" id="form2Example3" class="form-control" required/>
    
  </div>

  <!-- Role dropdown menu -->
  <div class="form-group">
  <label for="form2Example3">Role</label>
  <select class="form-control" id="form2Example3" name="role" required>
    <option selected disabled value="">Choose a role</option>
    <option value="sales">Sales</option>
    <option value="logistics">Logistics</option>
    <option value="adv">Adv</option>
    <option value="admin">Admin</option>
  </select>
  </div>


  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
     
    </div>

  
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

  <!-- Register buttons -->
  <br>
  <div class="text-center">
    <p>Already a member? <a href="loginform.php">Login</a></p>
  </div>
</form>
</body>
</html>


