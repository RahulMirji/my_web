<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog-post</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Blog Specific Styles */
        .blog-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            margin-top: 60px;
        }
        .blog-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .blog-header h1 {
            font-size: 36px;
            color: #333;
        }
        .blog-header p {
            font-size: 18px;
            color: #666;
        }
        .blog-post {
            display: flex;
            margin-bottom: 30px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }
        .blog-image {
            width: 300px;
            height: 200px;
            margin-right: 20px;
            border-radius: 10px;
        }
        .blog-content {
            max-width: 800px;
            background-color: #494848;
            padding: 40px;
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 4px 8px rgba(60, 60, 60, 0.1);
        }
        .blog-content h2 {
            font-size: 28px;
            color: #fff;
        }
        .post-date {
            font-size: 14px;
            color: #ccc;
        }
        .blog-content p {
            font-size: 16px;
            color: #ddd;
        }
        .read-more {
            display: inline-flex;
            margin-top: 10px;
            padding: 10px 10px;
            background: #dc0a0a;
            color: #f1ecec;
            text-decoration: none;
            border-radius: 5px;
                
        }
        .read-more:hover {
            color: #fff;
            transition: background-color 0.3s;
            display: inline-flex;
        }
        .back-home {
        text-decoration: none;
        color: #fff;
        padding: 10px 20px;
        background-color: #333;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }
        footer {
            text-align: center;
            padding: 20px 0;
            background: #333;
            color: #fff;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <?php 
    include 'nav.php';
    ?>
    <section class="blog-container">
        <div class="blog-header">
            <h1>Welcome to My Blog</h1>
            <p>Insights, thoughts, and updates on AI, technology, and more!</p>
        </div>

        <!-- Blog Post Example -->
        <div class="blog-post">
            <section class="blog-content">
                <h2>Welcome to My Blog Corner</h2>
                <p class="post-date">August 5, 2024</p>
                <p>
                    Welcome to My Blog Corner
                    Dive into a world of insights, where I share my journey as a web developer and AIML enthusiast. From coding tips and project walkthroughs to the latest trends in AI and machine learning, my blog is a hub for tech enthusiasts and learners alike. Stay updated with innovative ideas, tutorials, and personal experiences that fuel my passion for technology. Curious to learn more? Click the link below to explore my blog and join me in this exciting digital adventure!
                    Artificial Intelligence (AI) is a rapidly growing field, transforming industries and impacting daily life. In this blog post, we'll explore the basics of AI, its applications, and its future potential.
                </p>
                <a href="https://rahulmirji444.blogspot.com/" target="_blank" class="read-more">Read More</a>
            </section>
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
