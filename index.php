<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
    <h1 class="text-center">Registration Form Validation</h1>
        <form id="signup" action="" method="POST" class="needs-validation">
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationTooltip01">First name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="First name">
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>

        </div>
          <div class="col-md-12 mb-3">
              <button name="submit" class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </div>
      

        </div>
       
      </form>
    </div>
  </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>