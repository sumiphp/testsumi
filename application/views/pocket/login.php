<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #2a2af7;
  background-image: linear-gradient(90deg, rgb(121, 10, 180) 30%, rgb(64, 69, 217) 100%);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #000046;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #2a2af7;
  background-image: linear-gradient(90deg, rgb(121, 10, 180) 30%, rgb(64, 69, 217) 100%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}  
    </style>
</head>
<body>
    <div class="login-page">
        <div class="form">
        <h3>LOGIN</h3>
            <form class="login-form" action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    
    <?php
        session_start();
        include 'config.php';
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($link, $_POST['username']);
            $password = mysqli_real_escape_string($link, $_POST['password']);
            if ($username != "" && $password != ""){
                $query = "select * from login where username='".$username."' and password='".$password."'";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_array($result);
                $count = $row['log_id'];
                if($count > 0){
                    $_SESSION['username'] = $username;
                    echo "You are logged in!";
                    header('Location: index.php'); 
                    exit; 
                } else {
                    echo "Error! Invalid username and password.";
                }
            }
        }
    ?>

</body>
</html>

