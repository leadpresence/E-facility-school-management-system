<?php

include "header.php";
require_once ('Connect.php');


$username = $_POST['user_SSID'];
$password = $_POST['password'];
$class = $_POST['class'];
$flag = true;
if($class == 'Parent')
    $query = "SELECT * from Parents where username='{$username}' AND password = '{$password}'";
elseif($class=='Teacher')
    $query = "SELECT * from Employees  where ssn='{user_SSID}' AND password = '{$password}'";
elseif ($class == 'Student')
    $query = "SELECT * from Students where username='{$user_SSID}' AND password = '{$password}'";
elseif ($class == 'Admin')
    $query = "SELECT * from Employees where ssn='{$user_SSID}' AND password = '{$password}'";
else $flag = false;

if($flag) {
    $result = $conn->query($query) or Die("Error: " . $conn->error);
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user_SSID;
        $_SESSION['class'] = $class;
        if ($class == 'Teacher' || $class == 'Student' || $class='Admin') {
            $_SESSION['ssn'] = $result->fetch_array()[0];
//            echo $_SESSION['ssn'];
        }
        if($_SESSION['class']!='Admin')
        header("Location: index.php");
        else
            header("Location:admin.php");
        die();
    } else {
        echo "User Does not exist. ". $conn->error;
    }
}else
    echo "Please Choose A Class";
?>