<?php

    function connection_db()
    {
        $database = mysqli_connect("localhost","root","","intranet");
        mysqli_set_charset($database,"utf8");
        return $database;
    }

?>