<!DOCTYPE html>
<?php
error_reporting(0);
require(config.php);
if(isset($_POST['submit'])){
    
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    if($email1 == $email2){
    if($pass1 == $pass2){
        
        //apply all filters
        $name = mysql_escape_string($_POST['name']);
        $lname = mysql_escape_string($_POST['lname']);
        $uname = mysql_escape_string($_POST['uname']);
        $email1 = mysql_escape_string($email1);
        $email2 = mysql_escape_string($email2);
        $pass1 = mysql_escape_string($pass1);
        $pass2 = mysql_escape_string($pass2);
        
        $pass1 = md5($pass1);
    
    
        $sql = mysql_query("SELECT * FROM 'users' WHERE 'uname' = '$uname'");
        if(mysql_num_rows($sql) > 0){
            echo "sorry that username already exists.";
            exit();
        }
        
        $sql = mysql_query("SELECT * FROM 'users' WHERE 'email' = '$email1'");
        if(mysql_num_rows($sql) > 0){
            echo "sorry that username already taken";
            exit();
    
        }
    
    mysql_query("INSERT INTO 'users' ('id, 'name', 'lname', 'uname', 'email' 'password', 'picture') VALUES (NULL, '$name', '$lname', '$uname', '$email1', '$pass1', '$picture'")));
    
    echo "Data entered successfully.<br />";
    exit();
    
    }
    }
}


?>

<html>
    <head>
        <title>Register for Demo to learn</title>
    
    
    </head>
    <body>
    <form action="register.php" method="post" role="form">
        <h2>Registration Form</h2>
        
        <input type="text" class="form-control" name="name" placeholder="name" required="" autofocus /><br />
        <input type="text" class="form-control" name="lname" placeholder="nick" required="" autofocus /><br />
        <input type="text" class="form-control" name="uname" placeholder="username" required="" autofocus /><br />
        <input type="email" class="form-control" name="email1" placeholder="email"  /><br />
        <input type="email" class="form-control" name="email2" placeholder="confirm email"  /><br />
        <input type="password" class="form-control" name="pass1" placeholder="namepassword" /><br />
        <input type="password" class="form-control" name="pass2" placeholder="confirm password" /><br />

                        
        <button name="submit" type="submit">Register</button>
        </form>
    
    
    </body>

</html>