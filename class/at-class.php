<?php
$connection = mysqli_connect("localhost","root","","my_worker");

if(!$connection)
{
    echo "<h1>Error in DB Connection</h1>";
    die();
}
