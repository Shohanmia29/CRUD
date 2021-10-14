<?php
$connection=mysqli_connect("localhost","root","","crudapplication");
function getconnection(){
    global $connection;
    return $connection;
};
?>