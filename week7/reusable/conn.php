<?php
$connect = mysqli_connect('localhost', 'root', '', 'Http5225Week5-0NA');
if (!$connect) {
    echo 'Error code: ' . mysqli_connect_errno();
    echo 'Error message: ' . mysqli_connect_error();
    exit;
}
