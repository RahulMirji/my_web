<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        footer {
            background-color: #282828;
            color: #e0e0e0;
            padding: 15px 0;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .footer-about,
        .footer-links,
        .footer-social {
            flex: 1;
            margin: 20px;
            min-width: 200px;
        }
        .footer-about h2,
        .footer-links h2,
        .footer-social h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #f1ecec;
            text-transform: uppercase;
        }
        .footer-about p {
            font-size: 15px;
            line-height: 1.6;
            color: #cccccc;
        }
        .footer-links ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .footer-links ul li {
            margin-bottom: 12px;
        }
        .footer-links ul li a {
            color: #b0b0b0;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }
        .footer-links ul li a:hover {
            color: #ffffff;
            text-decoration: underline;
        }
        .footer-social a {
            margin: 0 10px;
            color: #e0e0e0;
            text-decoration: none;
            font-size: 24px;
            display: inline-block;
            transition: color 0.3s;
        }
        .footer-social a img {
            width: 24px;
            height: 24px;
            vertical-align: middle;
        }
        .footer-social a:hover {
            color: #d32f2f;
        }
        .footer-bottom {
            margin-top: 20px;
            font-size: 14px;
            color: #888888;
        }
    </style>
</head>
<body>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h2>About Us</h2>
                <p>We provide insights and updates on AI, technology, and more. Stay tuned to our blog for the latest trends and information in the world of tech.</p>
            </div>

            <div class="footer-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="https://rahulmirji444.blogspot.com/" target="_blank">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <h2>Follow Us</h2>
                <a href="https://www.facebook.com/rahul.mirji.9" target="_blank">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook.png" alt="Facebook">
                </a>
                <a href="https://x.com/MirjiRahul?t=gKjLogF9Z8TOtutHzCasOg&s=09" target="_blank">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/twitter.png" alt="Twitter">
                </a>
                <a href="https://www.instagram.com/rahul__mirji" target="_blank">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/instagram-new.png" alt="Instagram">
                </a>
                <a href="https://in.linkedin.com/in/rahul-mirji-7764551ba" target="_blank">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/linkedin.png" alt="LinkedIn">
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2024 Copyright All Rights Reserved | Designed and Developed by Rahul Mirji
        </div>
    </footer>

</body>
</html>
