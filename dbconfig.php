<?php
$HOST='localhost';
$USER='root';
$PASS='';
$DB='react_class';
$CON=mysqli_connect($HOST,$USER,$PASS,$DB);
if(!$CON){
    echo "connection failed";

}