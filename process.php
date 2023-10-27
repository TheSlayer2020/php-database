<?php
session_start();
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Car_Name']) && isset($_POST['Car_Brand']) && isset($_POST['Car_Model']) && isset($_POST['Car_Color'])) {
        $Car_Name = $_POST['Car_Name'];
        $Car_Brand = $_POST['Car_Brand'];
        $Car_Model = $_POST['Car_Model'];
        $Car_Color = $_POST['Car_Color'];

        $sql = "INSERT INTO users (Car_Name, Car_Brand, Car_Model, Car_Color) 
        VALUES ('$Car_Name', '$Car_Brand', '$Car_Model', '$Car_Color')";
        
        if ($conn->query($sql) === true) {
            $_SESSION['success_message'] = "User data saved successfully!";
        } else {
            $_SESSION['error_message'] = "Error: " . $conn->error;
        }
    }
}

$conn->close();
header("Location: index.php");
?>
