<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container" style="width:500px;margin-top:5%">
      <form action="logueo" class="form-signin" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputaLogin" class="sr-only">Login:</label>
        <input type="text" name="login" id="login" class="form-control" placeholder="login" required autofocus>
        <label for="inputPassword" class="sr-only">Password:</label>
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
        <i class="glyphicon glyphicon-user form-control-feedback"></i>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->



</body>
</html>
