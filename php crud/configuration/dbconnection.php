<?PHP 
$name1='jeyakumar';
$password='mjk@2003m';
$db='ninja_pizza';
$connection=mysqli_connect('localhost',$name1,$password,$db);

if(!$connection){
    echo 'connection error'. mysqli_connect_error();
}
?>