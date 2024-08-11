<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

include('../db.php'); // Include database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record from the database
    $query = "DELETE FROM cust_req WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Deleted Successfully.");window.location.href = "view_messages.php";</script>';
 // Redirect back to the admin panel
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    header("Location: admin_panel.php");
}
?>
