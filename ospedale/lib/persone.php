<?php
    function persone($con){
        return mysqli_query($con, "select * from persona");
    }
?>