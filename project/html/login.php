<?php
session_start();

ob_start();
if (isset($_POST['login'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    if ($username && $password) {
        
        $filename = "../php/users.txt";
        
        
        if (file_exists($filename)) {
            $file = fopen($filename, "r");
            
            
            $loginSuccess = false;
            
           
            while ($line = fgets($file)) {
               
                list($storedUsername, $storedPassword) = explode(",", trim($line));
                
               
                if ($username == $storedUsername && $password == $storedPassword) {
                    $loginSuccess = true;
                    break; 
                }
            }
            
            fclose($file);
            
            
            if ($loginSuccess) {
                $_SESSION['loggedin'] = true; 
                $_SESSION['username'] = $username; 
                header("Location: /project/html/index.php");
                exit();
            } else {
                echo "Invalid username or password!";
            }
        } else {
            echo "User data file not found.";
        }
    } else {
        echo "Username and password must be filled!";
    }
}
ob_end_flush();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/project/css/style.css">
</head>


<body>
    <div class=logins>
        <center>
        <h1>Log in</h1>
        <form action="/project/html/login.php" method="post" class="forms">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>
     
            <ul class="log">
                <input type="submit" class="login" name="login" value="Log in">
            </ul>
        </form>
</center>
    </div>
</body>
</html>

