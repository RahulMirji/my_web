<?php
include('../db.php'); // Ensure this file connects to your database correctly

if (isset($_POST['send'])) {
    // Declare all variables
    $first_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $web_type = mysqli_real_escape_string($conn, $_POST['web_type']);
    $budget = mysqli_real_escape_string($conn, $_POST['budget']);
    $discription = mysqli_real_escape_string($conn, $_POST['discription']);
    $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);


    // Insert data into the database
    $insert_query ="INSERT INTO cust_req (full_name, email, phone_no, web_type, budget,discription, deadline) VALUES ( '$first_name', '$email', '$phone_no', '$web_type', '$budget', '$discription','$deadline')";

    // Execute the query
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        echo '<script>alert("Thank you for your response.");</script>';
    } else {
        echo '<script>alert("Something went wrong. Please Try Again.");</script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding:0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 150px auto 50px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .form-group button {
            display: block;
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
        /* Back Home Button */
        .back-home {
        text-decoration: none;
        color: #fff;
        padding: 10px 20px;
        background-color: #333;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }
        .back-home-container {
            margin: 40px 0; /* Added margin for top and bottom gap */
            text-align: center;
        }
    </style>
</head>
<body>
<?php include 'nav.php'; ?>

    <div class="form-container">
        <h2>Fill Your Requirements Here</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone_no" required>
            </div>
            <div class="form-group">
                <label for="website_type">Type of Website:</label>
                <select id="website_type" name="web_type" required>
                    <option value="personal">Personal Website</option>
                    <option value="business">Business Website</option>
                    <option value="ecommerce">E-commerce Website</option>
                    <option value="blog">Blog</option>
                    <option value="portfolio">Portfolio</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="budget">Estimated Budget (USD):</label>
                <input type="number" id="budget" name="budget" min="100" required>
            </div>
            <div class="form-group">
                <label for="features">Key Features Needed:</label>
                <textarea id="features" name="discription" placeholder="E.g., Contact Form, Gallery, User Login..." required></textarea>
            </div>
            <div class="form-group">
                <label for="deadline">Preferred Deadline:</label>
                <input type="date" id="deadline" name="deadline" required>
            </div>
            <div class="form-group">
                <button type="submit" name="send">Submit Request</button>
            </div>
        </form>
    </div>
    <div class="back-home-container">
        <a href="index.php" class="back-home">Back Home</a>
    </div>
    <footer>
        <?php
        include "footer.php"
        ?>
    </footer>
</body>
</html>
