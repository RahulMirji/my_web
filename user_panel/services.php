<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .services-container {
            max-width: 1000px;
            margin: 90px auto;
            padding: 20px;
            text-align: center;
        }
        .services-header {
            margin-bottom: 50px;
        }
        .services-header h1 {
            font-size: 36px;
            color: red;
            margin: 20px;
        }
        .services-grid {
    display: flex;
    justify-content: space-between; /* Ensures even spacing between boxes */
    flex-wrap: wrap; /* Allows wrapping to a new line if space is limited */
    gap: 20px; /* Add space between the items instead of using margins */
}

.service-box {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%; /* Set width to 30% to fit 3 boxes per row */
    padding: 20px;
    text-align: left;
    height: 400px; /* Consistent height for all service boxes */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Align items with space between */
}



        .service-box h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }
        .service-box p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            flex-grow: 1; /* Allows paragraph to fill available space */
        }
        .service-box a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc0a0a;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center; /* Center text within button */
            width: 100%; /* Button takes full width */
        }
        .service-box a:hover {
            background-color: #a30606;
        }
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
        @media (max-width: 1000px) {
        .service-box {
        width: 45%; /* Adjust width to fit 2 boxes per row on smaller screens */
        }
        }

         @media (max-width: 768px) {
         .service-box {
         width: 100%; /* Full width on smaller screens (1 box per row) */
                      }
        }
    </style>
</head>
<body>
    <?php 
    include "nav.php";
    ?>

    <!-- Services Section -->
    <section class="services-container">
        <div class="services-header">
            <h1 >My Services</h1>
            <p>Explore the wide range of services I offer as an engineering student, web developer, blogger, and AI/ML enthusiast.</p>
        </div>

        <div class="services-grid">
            <!-- Web Development Service -->
            <div class="service-box">
                <h2>Web Development</h2>
                <p>I design and develop modern, responsive websites that are user-friendly and visually appealing. Whether you need a personal portfolio or a complex web application, I can help you bring your ideas to life.</p>
                <a href="portfolio.php">View My Work</a>
            </div>

            <!-- Blogging Service -->
            <div class="service-box">
                <h2>Blogging</h2>
                <p>I write informative and engaging blogs on AI, technology, and more. If you’re looking for insightful content that resonates with tech enthusiasts, check out my blog for the latest posts.</p>
                <a href="https://rahulmirji444.blogspot.com/" target="_blank">Read My Blog</a>
            </div>

            <!-- AI/ML Projects Service -->
            <div class="service-box">
                <h2>AI/ML Projects</h2>
                <p>As an AIML student, I am passionate about developing AI and Machine Learning projects that solve real-world problems. From data analysis to model development, I offer end-to-end solutions in AI/ML.</p>
                <a href="projects.php">Explore My Projects</a>
            </div>
        </div>
    </section>
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
