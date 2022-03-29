<?php

$conn = mysqli_connect("localhost","root","","chat");
if(!$conn){
    echo "Error occured ", mysqli_connect_error();
}

?>