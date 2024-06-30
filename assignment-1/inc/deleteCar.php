<?php
include('functions.php');
require('../reusable/conn.php');
if (isset($_GET['deleteCar'])) {
    // print_r($_GET);
    $id = $_GET['id'];
    $query = "DELETE FROM forza_horizon_cars WHERE `id` = '" . mysqli_real_escape_string($connect, $id) . "'";
    $car = mysqli_query($connect, $query);

    if ($car) {
        set_message('Car was deleted succesfully!', 'danger');
        header('Location: ../index.php');
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}
