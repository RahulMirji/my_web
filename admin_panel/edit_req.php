<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

include('../db.php'); // Include database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the current data for the selected record
    $query = "SELECT * FROM cust_req WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $full_name = $row['full_name'];
        $email = $row['email'];
        $phone_no = $row['phone_no'];
        $web_type = $row['web_type'];
        $budget = $row['budget'];
        $discription = $row['discription'];
        $deadline = $row['deadline'];
    } else {
        echo "Record not found.";
        exit();
    }
}

if (isset($_POST['update'])) {
    echo "Form submitted"; // Check if the form submission is detected
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $web_type = $_POST['web_type'];
    $budget = $_POST['budget'];
    $discription = $_POST['discription'];
    $deadline = $_POST['deadline'];

    // Check if values are being received correctly
    echo "ID: $id, Full Name: $full_name, Email: $email, Phone: $phone_no, Web Type: $web_type, Budget: $budget, Description: $discription, Deadline: $deadline";

    $query = "UPDATE cust_req SET full_name='$full_name', email='$email', phone_no='$phone_no', web_type='$web_type', budget='$budget', discription='$discription', deadline='$deadline' WHERE id=$id";
    
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";
        header("Location: admin_panel.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer Requirement</title>
    <?php 
    include "nav.php";
    ?>
<style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px; /* Set a max-width for the form container */
    margin: 50px auto; /* Center the container and add space at the top and bottom */
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #007bff;
    margin-bottom: 20px;
    font-size: 28px;
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="email"],
input[type="date"],
textarea {
    padding: 10px;
    margin-bottom: 15px; /* Reduced margin for better spacing */
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
}

textarea {
    height: 100px;
    resize: vertical;
}

/* Button Styles */
button[type="submit"] {
    padding: 12px 20px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px; /* Added margin for spacing from other elements */
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        margin: 20px;
        padding: 15px;
    }

    h1 {
        font-size: 24px;
    }

    button[type="submit"] {
        padding: 10px;
        font-size: 14px;
    }
}
</style>
</head>
<body>
    <div class="container">
        <h1>Edit Customer Requirement</h1>
        <form action="edit_req.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" value="<?php echo $full_name; ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required><br>

            <label for="phone_no">Phone Number:</label>
            <input type="text" name="phone_no" value="<?php echo $phone_no; ?>" required><br>

            <label for="web_type">Website Type:</label>
            <input type="text" name="web_type" value="<?php echo $web_type; ?>" required><br>

            <label for="budget">Budget:</label>
            <input type="text" name="budget" value="<?php echo $budget; ?>" required><br>

            <label for="discription">Description:</label>
            <textarea name="discription" required><?php echo $discription; ?></textarea><br>

            <label for="deadline">Deadline:</label>
            <input type="date" name="deadline" value="<?php echo $deadline; ?>" required><br>

            <button type="submit" name="update">Update</button>
        </form>
    </div>
    <footer>
        <?php
        include "../user_panel/footer.php";
        ?>
    </footer>
</body>
</html>
