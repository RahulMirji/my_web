<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        header {
            background: url('https://img.icons8.com/clouds/1000/000000/team.png') no-repeat center center/cover;
            color: #fff;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        header h1 {
        font-size: 3rem;
        margin-bottom: 10px;
        color: #fff;
        padding: 10px 0; /* Removes side padding */
        text-align: center;
        background: linear-gradient(to right, rgba(40, 40, 40, 0.2), rgba(40, 40, 40, 0.9), rgba(40, 40, 40, 0.2)); /* Reduced opacity at ends, more visible color in the middle */
        width: 100vw; /* Extends the background to full viewport width */
        margin-left: calc(-50vw + 50%); /* Centers the full-width background */
        padding-left: 20px;
        padding-right: 20px;
        }

        header p {
            font-size: 1.2rem;
            max-width: 80%;
            margin: 0 auto;
            color:black;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .about-us {
            text-align: center;
            margin: 40px 0;
        }

        .about-us h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1rem;
            color: #555;
            line-height: 1.7;
            max-width: 80%;
            margin: 0 auto;
        }

        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 40px; /* Added margin-bottom */
        }

        .team-member {
            background: #fff;
            margin: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex-basis: calc(33.333% - 30px);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #777;
        }

        .back-home-container {
            margin: 40px 0; /* Added margin for top and bottom gap */
            text-align: center;
        }

        .back-home {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            background-color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-home:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <?php
        include "nav.php"
    ?>

    <!-- Hero Section -->
    <header>
        <div>
            <h1>About Our Team</h1>
            <p>We are a passionate group of individuals dedicated to bringing the latest in AI and technology.</p>
        </div>
    </header>

    <!-- About Us Section -->
    <section class="container about-us">
        <h2>Who We Are</h2>
        <p>We are a team of dedicated professionals with a shared passion for innovation and technology. Our mission is to provide valuable insights, updates, and resources in the field of AI and tech. We believe in staying ahead of the curve and bringing the best to our audience.</p>
    </section>

    <!-- Team Section -->
    <section class="container team">
        <div class="team-member">
            <img src="https://img.icons8.com/clouds/150/000000/user.png" alt="Team Member 1">
            <h3>Rahul Mirji</h3>
            <p>Lead Developer</p>
        </div>
        <div class="team-member">
            <img src="https://img.icons8.com/clouds/150/000000/user.png" alt="Team Member 2">
            <h3>Praveen Mirji</h3>
            <p>AI Specialist</p>
        </div>
        <div class="team-member">
            <img src="https://img.icons8.com/clouds/150/000000/user.png" alt="Team Member 3">
            <h3>Shreeram Biradar</h3>
            <p>Data Scientist</p>
        </div>
    </section>

    <!-- Back Home Button -->
    <div class="back-home-container">
        <a href="index.php" class="back-home">Back Home</a>
    </div>

    <!-- Footer -->
    <footer>
        <?php
        include "footer.php"
        ?>
    </footer>
</body>
</html>
