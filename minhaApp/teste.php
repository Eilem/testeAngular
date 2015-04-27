<?php


//echo file_get_contents($_SERVER['REQUEST_URI']);


//echo "Hello complicated world";

header("Content-Type: text/html");
echo file_get_contents( 'teste.js' );