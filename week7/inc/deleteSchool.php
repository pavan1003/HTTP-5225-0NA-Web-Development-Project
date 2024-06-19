<?php
include('functions.php');
require('../reusable/conn.php');
if (isset($_GET['deleteSchool'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM schools WHERE `id` = '$id'";
    $school = mysqli_query($connect, $query);

    if ($school) {
        set_message('School was deleted succesfully!', 'danger');
        header('Location: ../index.php');
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}
