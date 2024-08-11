<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designer Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header styles */
        header {
            background: #f4f4f4;
            padding: 50px 0;
            text-align: center;
            position: relative;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 90px auto;
            padding: 60px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 10px 9px 10px orange;
            animation: fadeIn 2s ease-in-out;
        }

        .header-content {
            max-width: 50%;
        }

        .header-content h1 {
            font-size: 3em;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .header-content p {
            font-size: 1.2em;
            color: #666;
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

        .cta-buttons {
            display: flex;
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

        /* Loader Styles */
        .loader {
            position: absolute;
            top: 50%;
            left: 70%;
            z-index: 10;
            width: 220px;
            height: 124px;
            margin-left: -80px;
            margin-top: -50px;
            border-radius: 5px;
            background: #1e3f57;
            animation: dot1_ 4s cubic-bezier(0.55,0.3,0.24,0.99) infinite;
        }

        .loader:nth-child(2) {
            z-index: 11;
            width: 150px;
            height: 90px;
            margin-top: -45px;
            margin-left: -75px;
            border-radius: 3px;
            background: #3c517d;
            animation-name: dot2_;
        }

        .loader:nth-child(3) {
            z-index: 12;
            width: 40px;
            height: 20px;
            margin-top: 50px;
            margin-left: -20px;
            border-radius: 0 0 5px 5px;
            background: #6bb2cd;
            animation-name: dot3_;
        }

        @keyframes dot1_ {
            3%,97% {
                width: 160px;
                height: 100px;
                margin-top: -50px;
                margin-left: -80px;
            }

            30%,36% {
                width: 80px;
                height: 120px;
                margin-top: -60px;
                margin-left: -40px;
            }

            63%,69% {
                width: 40px;
                height: 80px;
                margin-top: -40px;
                margin-left: -20px;
            }
        }

        @keyframes dot2_ {
            3%,97% {
                height: 90px;
                width: 150px;
                margin-left: -75px;
                margin-top: -45px;
            }

            30%,36% {
                width: 70px;
                height: 96px;
                margin-left: -35px;
                margin-top: -48px;
            }

            63%,69% {
                width: 32px;
                height: 60px;
                margin-left: -16px;
                margin-top: -30px;
            }
        }

        @keyframes dot3_ {
            3%,97% {
                height: 20px;
                width: 40px;
                margin-left: -20px;
                margin-top: 50px;
            }

            30%,36% {
                width: 8px;
                height: 8px;
                margin-left: -5px;
                margin-top: 49px;
                border-radius: 8px;
            }

            63%,69% {
                width: 16px;
                height: 4px;
                margin-left: -8px;
                margin-top: -37px;
                border-radius: 10px;
            }
        }

        /* Card section styles */
        /* Second Section Starts here*/
        .card-container {
            display: flex;
            justify-content: center; /* Center the cards horizontally */
            flex-wrap: wrap; /* Allow cards to wrap onto the next line if needed */
            gap: 20px; /* Add space between the cards */
            padding: 20px; /* Add some padding around the container */
        }

        .card {
            display: block;
            position: relative;
            flex: 1 1 300px; /* Flex-grow, flex-shrink, and flex-basis for responsive design */
            max-width: 300px; /* Ensure cards do not exceed 300px */
            max-height: 320px;
            background-color: #f2f8f9;
            border-radius: 10px;
            padding: 2em 1.2em;
            margin: 12px;
            text-decoration: none;
            z-index: 0;
            overflow: hidden;
            background: linear-gradient(to bottom, #c3e6ec, #a7d1d9);
            font-family: Arial, Helvetica, sans-serif;
        }

        .card:before {
            content: '';
            position: absolute;
            z-index: -1;
            top: -16px;
            right: -16px;
            background: linear-gradient(135deg, #364a60, #384c6c);
            height: 32px;
            width: 32px;
            border-radius: 32px;
            transform: scale(1);
            transform-origin: 50% 50%;
            transition: transform 0.35s ease-out;
        }

        .card:hover:before {
            transform: scale(28);
        }

        .card:hover .small-desc {
            transition: all 0.5s ease-out;
            color: rgba(255, 255, 255, 0.8);
        }

        .card:hover .card-title {
            transition: all 0.5s ease-out;
            color: #ffffff;
        }

        .card-title {
            color: #262626;
            font-size: 1.5em;
            line-height: normal;
            font-weight: 700;
            margin-bottom: 0.5em;
        }

        .small-desc {
            font-size: 1em;
            font-weight: 400;
            line-height: 1.5em;
            color: #452c2c;
        }

        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 2em;
            height: 2em;
            overflow: hidden;
            top: 0;
            right: 0;
            background: linear-gradient(135deg, #6293c8, #384c6c);
            border-radius: 0 4px 0 32px;
        }

        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }
        /* heading for second section starts here*/
        .section-title {
            font-size: 3rem;
            font-weight: bold;
            color: red;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            text-align: center;
            position: relative;
            animation: fadeIn 2s ease-in-out;
        }

        .section-title::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            height: 4px;
            background: #ffffff;
            transform: scaleX(0);
            transform-origin: bottom right;
            animation: underline 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes underline {
            to {
                transform: scaleX(1);
                transform-origin: bottom left;
            }
        }
    </style>
    <?php include 'nav.php'; ?>
</head>
<body>
<header>
    <div class="header-container">
        <div class="header-content">
            <h1>Websites Done Right</h1>
            <p>I am a web developer from Bengaluru, India, and I currently live in Bengaluru. I enjoy building everything from small business sites to rich interactive web apps. If you are a business seeking a web presence or an employer looking to hire, you can get in touch with me <a href="contact.php">here</a>.</p>
            <div class="cta-buttons">
                <a href="i_need_web.php" class="btn">I need a website <span>&#10145;</span></a>
                <a href="#" class="btn secondary">I'm looking to hire <span>&#10145;</span></a>
            </div>
        </div>
        <div class="container">
            <div class="loader"></div>
            <div class="loader"></div>
            <div class="loader"></div>
        </div>
    </div>
</header>
<!-- Second section begins here -->
 <div>
<h1 class="section-title">Let's Walk through our Ideas</h1>

<div class="card-container">
    <div class="card">
        <p class="card-title">Innovative Solutions</p>
        <p class="small-desc">
            I create unique web solutions that align with specific business needs. From intuitive designs to robust backend systems, my goal is to deliver websites that excel in both functionality and innovation. I focus on building digital experiences that truly stand out.
        </p>
        <div class="go-corner">
            <div class="go-arrow">→</div>
        </div>
    </div>
    <div class="card">
        <p class="card-title">Tech Stack</p>
        <p class="small-desc">
            My expertise includes modern technologies like HTML, CSS, and JavaScript. I also work with frameworks such as React, and manage backend development with Node.js and Python. I ensure that my tech stack is always up-to-date for building efficient and scalable web solutions.
        </p>
        <div class="go-corner">
            <div class="go-arrow">→</div>
        </div>
    </div>
    <div class="card">
        <p class="card-title">Portfolio</p>
        <p class="small-desc">
            My portfolio features a range of projects, from responsive websites to complex applications. Each project reflects my commitment to quality, creativity, and technical excellence. Explore my work to see how I bring ideas to life through effective web design and development.
        </p>
        <div class="go-corner">
            <div class="go-arrow">→</div>
        </div>
    </div>
</div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
