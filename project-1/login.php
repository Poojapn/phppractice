<!DOCTYPE html>
<?php

include 'config.php';

if(isset($_POST['submit'])){
    
    $uname = mysql_escape_string($_POST['uname']);
    $pass = mysql_escape_string($_POST['pass']);
    $pass = md5($pass);
    $sql =mysql_query("SELECT * FROM 'users' WHERE 'uname' = '$uname' AND 'password' = '$pass'");
    
    //vulnerable to SQL Injection
    $count=mysql_num_rows($sql);
    $row = mysql_fetch_array($sql);
}
if($count > 0) {
    session_start();
    $_SESSION['login_status']=true;
    $_SESSION['uname'] = $row['uname'];
    $_SESSION['name'] = $row['name'];

    $_SESSION['lname'] = $row['lname'];

    $_SESSION['email'] = $row['email'];
    $_SESSION['picture'] = $row['picture'];

    header("Location:prfile.php");
}else{
    header('locaton:login.php');
    
}
    
}
?>


<html>

    <head>
        <title>Login Page : Demo Project to learn</title>
    </head>
    
    <body>
    
    <form action="" method="post" role="form">
        <h2>please login from here: </h2>
        
        <input type="text" class="form-control" placeholder="login" name="uname" autofocus="">
                <input type="password" class="form-control" placeholder="password" name="password" autofocus="">

        <div class="checkbox">
            <label>
            
            <input type="checkbox" value="remember me">Remember me
            </label>
        
            
        
        </div>
        
        <button name="submit" type="submit">Log in</button>
        <br />
        
        </form>
    
        
    </body>

</html>