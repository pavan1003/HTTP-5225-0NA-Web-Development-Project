<?php
include('functions.php');
if (isset($_POST['addCar'])) {
    // print_r($_POST);
    $carNameModel = $_POST['carNameModel'];
    $modelType = $_POST['modelType'];
    $inGamePrice = $_POST['inGamePrice'];
    $horsePower = $_POST['horsePower'];
    $weight = $_POST['weight'];
    $driveType = $_POST['driveType'];
    $acceleration = $_POST['acceleration'];
    $speed = $_POST['speed'];
    $handling = $_POST['handling'];
    $imageUrl = $_POST['imageUrl'];

    // Connection string
    include('../reusable/conn.php');
    $query = "INSERT INTO forza_horizon_cars (`Name_and_model`, `Model_type`, `In_Game_Price`,`Horse_Power`,`Weight_lbs`,`Drive_Type`, `acceleration`, `speed`, `handling`,`Car_Image`) VALUES (
        '" . mysqli_real_escape_string($connect, $carNameModel) . "',
        '" . mysqli_real_escape_string($connect, $modelType) . "',
        '" . mysqli_real_escape_string($connect, $inGamePrice) . "',
        '" . mysqli_real_escape_string($connect, $horsePower) . "',
        '" . mysqli_real_escape_string($connect, $weight) . "',
        '" . mysqli_real_escape_string($connect, $driveType) . "',
        '" . mysqli_real_escape_string($connect, $acceleration) . "',
        '" . mysqli_real_escape_string($connect, $speed) . "',
        '" . mysqli_real_escape_string($connect, $handling) . "',
        '" . mysqli_real_escape_string($connect, $imageUrl) . "')";

    $car = mysqli_query($connect, $query);

    if ($car) {
        set_message('Car was added succesfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}
