<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'belajar');
if (mysqli_connect_errno()){
    printf('Connection failed: ' . mysql_connect_error());
    exit();
}