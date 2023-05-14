<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>

  </style>
  

</head>

<body>
    

    
  <div class="container-sm">

    <form id="myform" action="insert.php" method = "post">
      <div class="row  mb-3">
        <div class="col-sm-12">
          <h1>Sign Up</h1>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">First name</label>
        <div class="col-sm-10">
          <input type="text"  name="first_name"  class="form-control" id="firstName">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Last name</label>
        <div class="col-sm-10">
          <input type="text"  name="last_name" class="form-control" id="lastName">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email"  class="form-control" id="email_id">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password"  class="form-control" id="Password">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Confirm password</label>
        <div class="col-sm-10">
          <input type="password"  name="confirm_password" class="form-control" id="confirmPassword">
        </div>
      </div>
      <button type="submit" class="btn btn-primary mb-3" onClick="validateForm()">Submit</button>
    </form>


</div>
    <script>
      function validateForm () {
        let firstname = document.getElementById("firstName").value;
        if(firstname == ''){
          alert("Enter first name ");
        }

        let lastname = document.getElementById("lastName").value;
        if(lastname == ''){
          alert("Enter last name ");
        }

        let email = document.getElementById("email_id").value;
        if(email == ''){
          alert("Enter your email ");
        }

        let password = document.getElementById("Password").value;
        if(password == ''){
          alert("Enter your password ");
        }
        
        let confirm_password = document.getElementById("confirmPassword").value;
        if( confirm_password== ''){
          alert("Enter your confirm_password ");
        }

      }
  </script>

</body>

</html>