<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

include('../db.php'); // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Website Requirements</title>
    <link rel="stylesheet" href="admin-styles.css"> <!-- Link to your CSS file -->
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
        max-width: 1200px;
        margin: 50px auto 0 auto; /* Added margin-top of 50px */
        padding: 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }


        h1, h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            color: #007bff;
        }

        h2 {
            font-size: 26px;
            color: #444;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table td a.btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Flexbox for Action Buttons */
        /* Inside the existing <style> tag */

        .action-buttons img {
            width: 20px; /* Adjust the width as needed */
            height: 20px; /* Adjust the height as needed */
        }

        .action-buttons {
            display: flex;
            gap: 5px; /* Spacing between buttons */
        }

        .edit-btn {
            background-color: #28a745;
        }

        .edit-btn:hover {
            background-color: #218838;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        /* Style for empty table message */
        table td[colspan="8"], table td[colspan="4"] {
            text-align: center;
            font-style: italic;
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 15px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 24px;
            }

            table th, table td {
                padding: 8px 10px;
            }
        }

    </style>
</head>
<body>
    <?php include('nav.php'); // Include your admin navigation ?>
    
    <div class="container">
        <h1>Customer Website Requirements</h1>

        <!-- Section to display customer website requirements -->
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Website Type</th>
                    <th>Budget</th>
                    <th>Description</th>
                    <th>Deadline</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM cust_req";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['full_name']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['phone_no']}</td>";
                        echo "<td>{$row['web_type']}</td>";
                        echo "<td>{$row['budget']}</td>";
                        echo "<td>{$row['discription']}</td>";
                        echo "<td>{$row['deadline']}</td>";
                        echo "<td class='action-buttons'>
                        <a href='edit_req.php?id={$row['id']}' class='btn edit-btn'onclick='return confirm(\"Are you sure you want to edit this?\");'>
                            <img src='https://img.icons8.com/?size=100&id=H5dKJanZkZNk&format=png&color=000000' alt='Edit'>
                        </a>
                        <a href='delete_req.php?id={$row['id']}' class='btn delete-btn' onclick='return confirm(\"Are you sure you want to delete this?\");'>
                            <img src='https://img.icons8.com/?size=100&id=99961&format=png&color=000000' alt='Delete'>
                        </a>
                      </td>";
                
                    }
                } else {
                    echo "<tr><td colspan='8'>No customer website requirements found.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Section for Contact Me Form -->
        <h2>Contact Messages</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date Submitted</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM contact_me ORDER BY created_at DESC";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['message']}</td>";
                        echo "<td>{$row['created_at']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No contact messages found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div> 
    <footer>
        <?php include "../user_panel/footer.php"; ?>
    </footer>
</body>
</html>
