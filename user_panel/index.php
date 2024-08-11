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
             /* From Uiverse.io by Nawsome */ 
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

<footer>
    <?php include "footer.php"; ?>
</footer>
</body>
</html>
