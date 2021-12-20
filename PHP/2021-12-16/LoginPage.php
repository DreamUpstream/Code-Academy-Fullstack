<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script src="LoginApp.js"></script>
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="card" style="width: 18rem;">
        <img src="profile.png" class="card-img-top">
        <div class="card-body">
          <div class="mb-3">
            <label for="InputEmail" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="InputEmail"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="InputPassword"
            />
          </div>
          <a href="#" id="mainButton" class="btn mt-2 btn-success w-100 disabled">Log in</a>
        </div>
      </div>
    </div>
    
    
  </body>
</html>
