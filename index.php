<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Login Form</title>
</head>
<body>
<section class="vh-100 gradient-custom"> 
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
    <form method="post" action="actlogin.php">
      <div class="form-outline form-white mb-4">
        <input type="username" name="username" id="username" class="form-control" placeholder="Enter username"><br/>
      </div>

      <div class="form-outline form-white mb-4"></div>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password"><br/>
      </div>
      
      <div class="form-outline form-white mb-4">
        <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Login">Login</button> 
      </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>