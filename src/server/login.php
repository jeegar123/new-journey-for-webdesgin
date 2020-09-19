<?php
// in get data in url is visble
// data fetch using get method
    // $username =$_GET['username'];
    // $password =$_GET['password'];

    // in post url data will not visible
    // data fetch using post method
    $username =$_POST['username'];
    $password =$_POST['password'];
    
    if($username == 'admin@gmail.com' and $password == 'admin'){
        echo "<h1>Welcome Admin,$username</h1>";
    }else{
        echo "<h1>Sorry Invalid username and password</h1>";
    }
    
?>