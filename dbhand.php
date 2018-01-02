<?php
session_start();

$conn = mysqli_connect("localhost","root","Sarraj","loginBGPS");

if(!$conn)
{
    die("connection failed : ".mysqli_connect_error());
}