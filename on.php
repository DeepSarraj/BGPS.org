<?php
session_start();

include'dbhand.php';
    $UserName= $_POST['UserName'];
    $pwd = $_POST['pwd'];
echo $UserName."<br><br>";
echo $pwd."<br>";

$sql = "select * from admin where UserName='$UserName' AND pwd='$pwd'";
$result = $conn->query($sql);
    if(!$row = $result ->fetch_assoc())
        {
        echo "Your username or password is correct !";
        }
else
{
    $_SESSION['id'] = $row['id'];
}
 //header("Location: login.php");
?>
