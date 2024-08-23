<?php
include('../db.php'); // Ensure this file connects to your database correct

if (isset($_POST['send'])) {
    // Declare all variables
    $first_name = mysqli_real_escape_string($conn, $_POST['name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $insert_query = "INSERT INTO contact_me (name, email, message) VALUES ('$first_name', '$user_email', '$message')";

    // Execute the query
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        // If the insertion was successful, show the alert
        echo '<script>alert("We will catch you very soon. Thank You...!!");</script>';
    } else {
        // If there was an error in the query, show a different alert
        echo '<script>alert("Something went wrong. Please Try Again.");</script>';
    }
}
?>
<!-- Html code  contect form begins here-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include "nav.php"
    ?>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styl
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

/* Section styles */
#contact {
    background-color: #fff;
    padding: 50px 20px;
    max-width: 800px;
    margin: 50px auto;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Contact Info */
.contact-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}

.contact-item {
    flex: 1;
    margin: 10px;
    min-width: 220px;
}

.contact-item h3 {
    font-size: 18px;
    color: #f4b41a;
    margin-bottom: 10px;
}

.contact-item p {
    font-size: 16px;
    color: #555;
}

.contact-item a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.contact-item a:hover {
    color: #f4b41a;
}

/* Form Style */
form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-size: 16px;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #f9f9f9;
}

textarea {
    resize: vertical;
}

button[type="submit"] {
    padding: 12px 20px;
    background-color: #f4b41a;
    border: none;
    color: #fff;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #333;
    color: #f4b41a;
}

/* Back Home Button */
.back-home {
    text-decoration: none;
    color: #fff;
    padding: 10px 20px;
    background-color: #333;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    margin-bottom: 30px; 
}


.logo,h1,h5{
    color: #fff;
    
}

/* Responsive Design */
@media (max-width: 768px) {
    .contact-info {
        flex-direction: column;
    }

    .contact-item {
        margin: 10px 0;
    }
}


    </style>
</head>
<body>
<?php include 'nav.php'; ?>
    <section id="contact">
        <h2>Contact Me</h2>
        <p>Feel free to reach out to me through any of the following methods:</p>
        <div class="contact-info">
            <div class="contact-item">
                <h3>Email</h3>
                <p><a href="mailto:rahul@example.com">rahul@example.com</a></p>
            </div>
            <div class="contact-item">
                <h3>Phone</h3>
                <p><a href="tel:+1234567890">+1 234-567-890</a></p>
            </div>
            <div class="contact-item">
                <h3>Address</h3>
                <p>HKBK College of Engineering, Bangalore, India</p>
            </div>
            <div class="contact-item">
                <h3>Social Media</h3>
                <p>
                    <a href="https://www.linkedin.com/in/rahul-mirji-7764551ba/?originalSubdomain=in" target="_blank">LinkedIn</a> |
                    <a href="https://github.com/RahulMirji" target="_blank">GitHub</a> |
                    <a href="" target="_blank">Twitter</a>
                </p>
            </div>
        </div>
        <h3 align="center" >Contact Form</h3>
        <form  method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="user_name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="user_email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message"  rows="4" required></textarea>
            </div>
            <button type="submit" name="send">Send Message</button>
        </form>
    </section>
    <div style="margin-bottom: 30px;">
    <center>
        <button>
            <a href="index.php" class="back-home">Back Home</a>
        </button>
    </center>
    </div>
    <footer>
        <?php
        include "footer.php"
        ?>
    </footer>
</body>
</html>
