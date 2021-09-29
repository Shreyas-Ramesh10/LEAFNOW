<html>
<head>
  <title> Login/Signup </title>
  <link rel="stylesheet" type ="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-md  navbar-dark">
    <a class="navbar-brand">LEAF NOW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="downn nav-link" href="index.html">Home</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class = "login_txt">
    <h1>Login to LEAF NOW</h1>
  </div>

  <div class = "container">
    <div class = "login-box">
      <div class ="row">




  <div class = "col-md-6 login-right">
    <h2 >Register Here</h1><br>
      <form action = "registration.php" method="post">
        <div class = "form-group">
          <label >Username</label>
          <input type ="text" name ="user" class="form-control" required >
        </div>
        <div class = "form-group">
          <label >Password</label>
          <input type ="password" name ="password" class="form-control" required ><br>
        </div>
        <button type = "submit" class = "btn btn-primary">Register here</button><br>
        <a style = "color:black" href="login.php"> Go back to Login Screen</a>
      </form>
      </div>
      </div>
      </div>
    </div>
</body>
</html>
