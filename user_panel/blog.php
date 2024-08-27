<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog-post</title>
    <link rel="stylesheet" href="styles.css">
    <style>
     /* The Styles for blog section starts here */
     .blog-preview-section {
            padding: 50px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .blog-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Create 3 columns */
            grid-gap: 20px; /* Space between grid items */
            justify-content: center;
            padding: 40px 40px;
            margin: 30px 40px;
            margin-left: 80px;
        }

        .blog-box {
            position: relative;
            width: 85%; /* Ensure boxes take full width of 
            height: 200px;
            background-color: #fff;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 7px 4px 7px black;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-box:hover {
            transform: translateY(-10px);
            box-shadow: 5px 7px 25px black;
        }

        .blog-box:hover img {
            transform: scale(1.1);
        }

        .blog-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            text-align: left;
            transition: background-color 0.3s ease;
        }

        .blog-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .blog-excerpt {
            font-size: 1rem;
            line-height: 1.4;
        }
        .blog-excerpt:hover a{
            cursor: pointer;
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

    </style>
</head>
<body>
    <?php 
    include 'nav.php';
    ?>
 <!-- Blog Preview Section -->
 <section class="blog-preview-section">
 <h2 style="
    text-align: center; 
    font-size: 3em; 
    margin-bottom: 40px; 
    margin: 60px 110px;
    margin-right: 130px;
    background: linear-gradient(to right, #ff7e5f, #feb47b);
    -webkit-background-clip: text;
    color: transparent;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    letter-spacing: 3px;
    border: 2px solid #ff7e5f;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
">
    LATEST BLOGS YOU MIGHT LIKE..!
</h2>
            <div class="blog-container">
                <div class="blog-box">
                    <img src="Blog Image/img9.jpg" alt="Blog 1">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 1</h3>
                        <p class="blog-excerpt">Can AI Really Save the Planet? Let's Discuss About it&nbsp;&nbsp;<a href="https://rahulmirji444.blogspot.com/2024/08/can-ai-really-save-planet.html"style="color: red;" target="_blank";>click here</a></p>

                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img1.jpg" alt="Blog 2">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 2</h3>
                        <p class="blog-excerpt">Google's AI Advances in Math: A New Era of Problem Solving&nbsp;&nbsp;<a href="https://rahulmirji444.blogspot.com/2024/08/googles-ai-advances-in-math-new-era-of.html"style="color: red;" target="_blank";>click here</a></p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img2.jpg" alt="Blog 3">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 3</h3>
                        <p class="blog-excerpt">Introduction to Artificial Intelligence for Beginners&nbsp;&nbsp;<a href="https://rahulmirji444.blogspot.com/2024/08/introduction-to-artificial-intelligence.html"style="color: red;" target="_blank";>click here</a></p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img3.jpg" alt="Blog 4">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 4</h3>
                        <p class="blog-excerpt">This is a short description or excerpt for blog post 4.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img4.jpg" alt="Blog 5">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 5</h3>
                        <p class="blog-excerpt">This is a short description or excerpt for blog post 5.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img5.jpg" alt="Blog 6">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 6</h3>
                        <p class="blog-excerpt">This is a short description or excerpt for blog post 6.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img6.jpg" alt="Blog 4">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 4</h3>
                        <p class="blog-excerpt">This is a short description or excerpt for blog post 4.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img7.jpg" alt="Blog 5">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 5</h3>
                        <p class="blog-excerpt">This is a short description or excerpt for blog post 5.</p>
                    </div>
                </div>
                <div class="blog-box">
                    <img src="Blog Image/img8.jpg" alt="Blog 6">
                    <div class="blog-content">
                        <h3 class="blog-title">Blog Post 6</h3>
                        <p class="blog-excerpt">This is a short description or excerpt for blog post 6.</p>
                    </div>
                </div>
            </div>
        </section>
        <center>
            <button><a href="index.php" class="back-home">Back Home</a></button>
        </center>
    <br>
    <footer>
        <?php
        include "footer.php"
        ?>
    </footer>
</body>
</html>
