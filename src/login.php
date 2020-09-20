<?php
// in get data in url is visble
// data fetch using get method
    // $username =$_GET['username'];
    // $password =$_GET['password'];

    // in post url data will not visible
    // data fetch using post method
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username =$_POST['username'];
        $password =$_POST['password'];
        
        if($username == 'admin@gmail.com' and $password == 'admin'){
            echo "<h1 class='success'>Welcome Admin,$username</h1>";
        }else{
            echo "<h1 class='danger'>Sorry Invalid username and password</h1>";
        }
        
    }

?>

<html>
    <head>
        <link rel="stylesheet" href="css/css.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Login Page</h1>
        <div id="loginform">
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <label for="username">Username</label>
                <input type="email" required name="username" id="username" class="input_field" />
                <br><br>
                <label for="password">Password</label>
                <input type="password" required name="password" id="password" class="input_field" />
    <br>
                <input type="submit" value="login" id="btn">
            </form>
        </div>
        


    </body>
</html>