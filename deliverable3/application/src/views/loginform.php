<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/loginstyle.css">
</head>
<body>
<form>
  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Email address</label>  
  <input type="email" id="form2Example1" class="form-control" required/>
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password</label>  
  <input type="password" id="form2Example2" class="form-control" />
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
     
    </div>

  
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <br>
  <div class="text-center">
    <p>Not a member? <a href="registerform.php">Register</a></p>
  </div>
</form>
</body>
</html>


