

<!-- login form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid bg-image">
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          <h4>Sign up</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" id="fullname" placeholder="Enter your full name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
              <label for="confirm-password">Confirm Password</label>
              <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            <div class="text-center mt-2">
              <a href="#">Forgot password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>