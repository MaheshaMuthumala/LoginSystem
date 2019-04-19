<?php
/**
 * Created by PhpStorm.
 * User: Maheshi
 * Date: 4/19/2019
 * Time: 5:40 PM
 */
//include("connection.php");
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

//mysql_connect("localhost", "root","");
//mysql_select_db("login");
//OpenCon();

$con = mysqli_connect("localhost", "root", "", "login");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "select * from users where username = '$username' and password = '$password'")
or die("Failed to query database".mysqli_connect_error());
$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){
    echo "Login Success!!! Welcome ".$row['username'];
}else{
    echo "Failed to login!";
}

mysqli_close($con);
?>