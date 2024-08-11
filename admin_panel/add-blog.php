<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

include('../db.php');

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $created_at = date('Y-m-d H:i:s');

    $query = "INSERT INTO blogs (title, content, created_at) VALUES ('$title', '$content', '$created_at')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Blog post added successfully!'); window.location.href='manage_blogs.php';</script>";
    } else {
        echo "<script>alert('Error: Could not add blog post.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog Post</title>
    <link rel="stylesheet" href="admin-styles.css">
</head>
<body>
    <?php include('nav.php'); ?>

    <div class="container">
        <h1>Add New Blog Post</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" rows="10" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn">Add Blog Post</button>
        </form>
    </div>
</body>
</html>
