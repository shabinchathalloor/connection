<?php
$conn = new mysqli("localhost","root","","connect") or die("Unable to connect");

if($conn)
    echo "Connected Successfully";

?>