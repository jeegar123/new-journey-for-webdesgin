<?php
$username ="";
    if(isset($_COOKIE['username'])){
        $username =$_COOKIE['username'];
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1 style="text-align: center;">Welcome To Login System </h1>

        <form action="checklogindetails.php" method="GET">
            <input type="email" name="username" placeholder="enter email" required class="userinput" value="<?php echo $username;?>"/><br>
            <input type="password" name="password" placeholder="enter password" required class="userinput" /><br>
            <input type="checkbox" name="rememberme" style="margin-top: 10px;">
            <label for="rememberme">remember me</label><br>
            <button type="submit">login</button>
        </form>

    </div>
</body>

</html>