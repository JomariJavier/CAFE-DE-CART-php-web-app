<?php 
ob_start();
$username = $email = $password = "";
$filename = "users.txt";
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $userDetails = $username .",". $password . "\n";
    $file = fopen($filename, "a+");
    if ($file) {
        fwrite($file, $userDetails);
        fclose($file);
        echo "Successfully ";
        header("Location: /project/html/index.php");
}
}
ob_end_flush();
?>