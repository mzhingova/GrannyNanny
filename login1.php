<html>
  <head>
    <style type="text/css">
    input{
    border:1px solid olive;
    border-radius:5px;
    }
    h1{
    color:darkgreen;
    font-size:22px;
    text-align:center;
    }
    span{
    color:lightgreen;
    color:blue;
    }
    </style>
  </head>
  <body>
    <h1>Login<h1>
    <form action="login.php" method='post'>
      <table cellspacing='5' align='center'>
        Email:<input type='text' name='email' autocomplete="off" />
        Password:<input type='password' name='pass' autocomplete="off" />
        <input type='checkbox' name='remember' autocomplete="off" /> <span>Remember me</span>
        <span><a href="forgot.html">Forgot password</a></span>
        <input type='submit' name='submit' value='Submit'/>
        New to GrannyNanny<a href="Registration.php" style="color: black"><span class="glyphicon glyphicon-user"> Sign up </span></a>
      </table>
    </form>
  </body>
</html>