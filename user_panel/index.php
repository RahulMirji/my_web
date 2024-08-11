<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designer Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General styles */
        *{
            margin: 0;
            padding: 60;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Header content styles */
        .header-content {
            max-width: 700px;
            margin: 100px auto;
            text-align: center;
            padding: 30px;
            background-color: rgb(47, 47, 47);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .header-content h1 {
            font-size: 3em;
            color: #fff;
            margin-bottom: 20px;
        }

        .header-content p {
            font-size: 1.2em;
            color: #fff;
            margin-bottom: 40px;
        }

        .header-content a {
            color: #ff004c;
            text-decoration: none;
            font-weight: bold;
        }

        .header-content a:hover {
            text-decoration: underline;
        }
        header {
            background: #f4f4f4;
            padding: 50px 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin:  auto;
        }

        .header-content {
            max-width: 700px;
            margin: 0 auto;
        }

        h1 {
            font-size: 2.5em;
            color: #1070bf35;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            color: #fff;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* CTA buttons */
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 1em;
            text-decoration: none;
            color: #fff;
            background-color: #181717;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn span { 
            margin-left: 10px;
            transition: margin-left 0.3s;
        }

        .btn:hover {
            background-color: #333;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn:hover span {
            margin-left: 15px;
        }

        .btn.secondary {
            background-color: #ed1010;
            color: #fff;
        }

        .btn.secondary:hover {
            background-color: #d00d0d;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<header>
    <div class="container"> 
        <div class="header-content">
            <h1 align="center ">Websites Done Right</h1>
            <p>I am a web developer from Bengaluru, India, and I currently live in Bengaluru. I enjoy building everything from small business sites to rich interactive web apps. If you are a business seeking a web presence or an employer looking to hire, you can get in touch with me <a href="contact.php">here</a>.</p>
            <div class="cta-buttons">
                <a href="i_need_web.php" class="btn">I need a website <span>&#10145;</span></a>
                <a href="#" class="btn secondary">I'm looking to hire <span>&#10145;</span></a>
            </div>
        </div>
    </div>
</header>
<footer>
        <?php
        include "footer.php"
        ?>
</footer>
</body>
</html>
