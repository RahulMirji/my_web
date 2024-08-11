<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
    exit();
}

include('../db.php'); // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blogs</title>
    <link rel="stylesheet" href="admin-styles.css">
    <?php include('nav.php'); ?>
<style>
    /* Dashboard Container */
    .dashboard-container {
    max-width: 1200px;
    margin: 70px auto;
    padding: 40px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
   }

   /* Welcome Message */
    .dashboard-container h1 {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
    }

    .dashboard-container p {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
    }

    /* Quick Stats Section */
    .quick-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: 40px;
    }

    .stat-box {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    width: 30%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .stat-box h2 {
    font-size: 24px;
    color: #007bff;
    margin-bottom: 10px;
    }

    .stat-box p {
    font-size: 28px;
    color: #333;
    }

   /* Recent Activity Section */
   .recent-activity {
    text-align: left;
    margin-bottom: 40px;
    }

   .recent-activity h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    }

    .recent-activity ul {
    list-style-type: none;
    padding: 0;
    }

    .recent-activity ul li {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

   /* Shortcut Links Section */
    .shortcuts {
    margin-bottom: 40px;
    }

    .shortcuts h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    }

    .shortcut-link {
    display: inline-block;
    padding: 15px 30px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin: 10px;
    transition: background-color 0.3s ease;
    }

    .shortcut-link:hover {
    background-color: #0056b3;
    }

    </style>
</head>
<body>
<div class="dashboard-container">
        <h1>Welcome Back, <?php echo $_SESSION['admin']; ?>!</h1>
        <p>Here's a quick overview of your website's status and recent activity.</p>

        <!-- Quick Stats Section -->
        <div class="quick-stats">
            <div class="stat-box">
                <h2>Total Blog Posts</h2>
                <p><?php echo $totalBlogs; ?></p> <!-- Replace with dynamic data -->
            </div>
            <div class="stat-box">
                <h2>Total Projects</h2>
                <p><?php echo $totalProjects; ?></p> <!-- Replace with dynamic data -->
            </div>
            <div class="stat-box">
                <h2>Total Services</h2>
                <p><?php echo $totalServices; ?></p> <!-- Replace with dynamic data -->
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="recent-activity">
            <h2>Recent Activity</h2>
            <ul>
                <li>Blog post titled "AI in 2024" was published.</li>
                <li>New project "Portfolio Website" added.</li>
                <li>Service "Web Development" updated.</li>
            </ul>
        </div>

        <!-- Shortcut Links Section -->
        <div class="shortcuts">
            <h2>Quick Links</h2>
            <a href="manage_blog.php" class="shortcut-link">Manage Blogs</a>
            <a href="manage_projects.php" class="shortcut-link">Manage Projects</a>
            <a href="manage_services.php" class="shortcut-link">Manage Services</a>
            <a href="settings.php" class="shortcut-link">Settings</a>
        </div>
    </div>       
    <footer>
        <?php
        include "../user_panel/footer.php";
        ?>
    </footer>
</body>
</html>
