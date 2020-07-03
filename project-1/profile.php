<!DOCTYPE html>
<html>
    <head></head>
        <body>

<?php

require 'config.php';

session_start();

if(isset($_SESSION['login_status']) == false)
{
    header("Location:login.php");
    echo 'wrong username or password !';
    
}
?>

<?php

if(isset($_POST['submit'])){
    move_uploaded_files($_FILES['file']['temp_name'],"picture/".$_FILES['files']['name']);
    $con = mysqli_connect("localhost", "root", "", "db");
    $q = mysqli_query($con,"UPDAT users SET picture = '".$_FILES['file']['name']."'WHERE uname = '".$_SESSION[]);
}

?>
<?php

if($_SESSION['picture'] == ""){
    echo "<img width='100' height='100' src='pictures/bot.png' alt='Default profile pic'>";
} else{
    echo "<img width='100' height='100' src='pictures/".$_SESSION['picture']."' alt='Default profile picture'>";
}
    
}

?>
<br />
<?php
echo $_SESSION['name'];
?>

<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="file"><input type="submit" name="submit">
</form>

<a href="destroy.php">Logout</a>

</body>
</html>













