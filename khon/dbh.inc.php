<?php

$conn = mysqli_connect('localhost', 'root', 'gwang-tainment.xampp','khonInstitute');

if (!$conn){
    die("Connection failed: " .mysqli_connect_error());
}