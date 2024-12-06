<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project/css/style.css">
</head>
<body>
    <div><center>
        <h1>Sign up</h1>
        <form action="/project/php/signup.php" method="post">
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br>
            <label>Confirm Password</label>
            <input type="password" name="confirm"><br>
         <ul class="log">
            <a href="/project/html/login.php"><li class="login">Back to login</li></a>
            <input type="submit" class="signup" name="signup" value="Confirm"></button>
            <a href="/project/html/index.php"><li class="home">Back to Home</li></a>
        </ul>
    </form>
        </center>
    </div>
    
</body>
</html>