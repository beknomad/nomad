
<!DOCTYPE html>
<html>
    <head>
        <title> Login Form </title>
      <link rel="stylesheet" type="text/css" href="css/login.css">
        
    </head>
<body>
    <div class="loginbox">
        <img src="image/login.png" class="avatar">
        <form action="Process.php" method="POST">
        <h1>Нэвтрэх хэсэг</h1>
        
           <p>Нэр</p>
           <input type="text" name="Username" placeholder="Нэвтрэх нэр ээ оруулна уу">
           <p>Нууц үг</p>
           <input type="text" name="Password" placeholder="Нэвтрэх нууц үг ээ оруулна уу">
           <input type="submit" name="LOGIN" value="Нэвтрэх">
           
        </form>
    </div>
    
    </body>
</html>