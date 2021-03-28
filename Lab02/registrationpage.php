<?php

Şuname="";

$pass="";

if ($_SERVER["REQUEST METHOD"]=="POST")
{

    $uname=$_POST["uname"]; 
    $pass=$_POST["pass"];

    $server="localhost";

    $user="Nova";

    $pass="";

    $db="Student";

    $conn mysqli_connect($server, $user, $pass, $db);

    $query="add into users values (NULL, '$uname', '$pass','user')";

    if(mysqli_query($conn, $query))
    {
        echo "User added";
    }

    else
    {
        echo "Can not add user";
    }

}

?>

<html>

<body>

<form action="" method="post">

<input type="text" name="uname" placeholder="username"><br>

<input type="password" name="pass" placeholder="password"><br> <input type="submit" value="register">