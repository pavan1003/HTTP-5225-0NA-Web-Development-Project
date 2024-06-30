<?php
include('functions.php');
print_r($_POST);
if (isset($_POST['updateCar'])) {
    $id = $_POST['id'];
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
    // print_r($_POST);

    // Connection string
    include('../reusable/conn.php');
    $query = "UPDATE `forza_horizon_cars` SET 
    `Name_and_model`='" . mysqli_real_escape_string($connect, $carNameModel) . "',
    `Model_type`='" . mysqli_real_escape_string($connect, $modelType) . "',
    `In_Game_Price`='" . mysqli_real_escape_string($connect, $inGamePrice) . "',
    `Horse_Power`='" . mysqli_real_escape_string($connect, $horsePower) . "',
    `Weight_lbs`='" . mysqli_real_escape_string($connect, $weight) . "',
    `Drive_Type`='" . mysqli_real_escape_string($connect, $driveType) . "',
    `acceleration`='" . mysqli_real_escape_string($connect, $acceleration) . "',
    `speed`='" . mysqli_real_escape_string($connect, $speed) . "',
    `handling`='" . mysqli_real_escape_string($connect, $handling) . "',
    `Car_Image`='" . mysqli_real_escape_string($connect, $imageUrl) . "' WHERE 
    `id`='" . mysqli_real_escape_string($connect, $id) . "'";

    $car = mysqli_query($connect, $query);
    if ($car) {
        set_message('Car was updated succesfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here";
}
