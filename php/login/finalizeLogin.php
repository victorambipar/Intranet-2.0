<?php


session_start();    
session_unset();  
session_destroy();
echo  "<body onLoad=\"window.location='../../index.php'\">"; 

?>