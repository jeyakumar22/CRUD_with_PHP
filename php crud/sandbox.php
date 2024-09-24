
<?php
//super globals
echo $_SERVER['SERVER_NAME']. "<br/>";
echo $_SERVER['SCRIPT_FILENAME']. "<br/>";
echo $_SERVER['REQUEST_METHOD']. "<br/>";
echo $_SERVER['PHP_SELF']. "<br/>";//AFTER LOAL COSTDIRECTORY
//ex $_SESSION,$_COOKIE


if(isset($_POST['submit'])){
    session_start();


    //set cookie

    setcookie('gender',$_POST['gender'],time()+86400);//84600 seconds per day to expiery cookie
    
    $_SESSION['name']=$_POST['name'];
    //echo $_SESSION['name'];
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="name">
<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>