<?php
    function connectDB($hostname, $username, $password,$dbname){
        return mysqli_connect($hostname, $username, $password,$dbname);
    }
?>