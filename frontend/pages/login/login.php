<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <title>Login Page</title>
</head>

<body>

<main>
  <div id="main-left">
    <div id="login-brand">
      <p id="title">CS174 • Onlive Virus Checker</p>
    </div>

    <!-- Form Start ================================== -->
    <div id="login-container">
      <h2>Welcome back, please login to your account</h2>
      
      <form>

      <!-- <p>Sorry, your username must be between 6 and 30 characters long.</p>
      <p>Sorry, only letters (a-z), numbers (0-9), and periods (.) are allowed.</p> -->
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="e.g. johndoe@gmail.com">

      <!-- <p>Your password can't start or end with a blank space</p> -->
      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Must be at least 6 characters">

      <div id="spaceBetween">
        <a id="signupLink" href="#">Create account</a>
        <input type="submit" value="Login">
      </div>

      </form>
    </div>
    
    <div id="login-credit">
      <p>Nhat Nguyen • Jasmine Mai • Albert Ong</p>
    </div>
  </div>
  <div id="main-right"></div>
</main>

</body>

</html>