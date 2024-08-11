<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Button</title>
    <link rel="stylesheet" href="index.php">
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Container */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Navigation styles */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120px; /* Increased height */
            padding: 10px 30px;
            display: flex;
            margin-bottom: 20px;
            justify-content: space-between;
            align-items: center;
            background-color: #282828;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            max-height: 80px; /* Adjusted logo size */
            border-radius: 50%;
            cursor: pointer;
        }

        .logo div {
            display: flex;
            flex-direction: column;
            margin-left: 15px;
        }

        .logo h3 {
            color: #fff;
            font-size: 1.8em;
            font-weight: bold;
            margin: 0;
        }
        .logo h3:hover {
            color: red;
        }


        .logo h5 {
            color: #fff;
            font-size: 1em;
            font-weight: 300;
            margin: 0;
        }
        .logo h5:hover {
            color:red;

        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 80px; /* Adjusted gap between navigation buttons */
        }

        .nav-links li {
            margin: 0;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            padding: 5px 0;
            transition: color 0.3s, border-bottom 0.3s;
        }

        .nav-links a:hover {
            color: #ff004c;
        }

        .nav-links a::after {
            content: '';
            width: 0;
            height: 2px;
            background-color: #ff004c;
            position: absolute;
            left: 0;
            bottom: -2px;
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }



        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding-top: 80px; /* Adjusted padding for smaller screens */
            }

            nav {
                flex-direction: column;
                align-items: flex-start;
                height: auto; /* Allow nav height to adjust */
                padding: 15px;
            }

            .logo {
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 10px;
            }

            .logo h3 {
                font-size: 1.5em;
            }

            .logo h5 {
                font-size: 0.9em;
            }

            .nav-links {
                flex-direction: column;
                gap: 15px;
                width: 100%;
                align-items: flex-start;
            }

            .nav-links a {
                padding: 10px 0;
                width: 100%;
                text-align: left;
            }

            .header-content h1 {
                font-size: 2.5em;
            }

            .header-content p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
<!-- nav.php -->
<div class="container">
    <nav>
        <div class="logo">
            <a href="../user_panel/index.php">
            <img src="../user_panel/Images/RR_DEV2.png" alt="Logo"></a>
            <div>
                <h3>RAHUL MIRJI</h3>
                <h5>WEB DEVELOPER & BLOGGER</h5>
                <h5>Let's Connect</h5>
            </div>
        </div>
        <ul class="nav-links">
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="manage-blogs.php">Manage Blogs</a></li>
            <li><a href="view_messages.php">View Messages</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </ul>
    </nav>    
</div>

</body>
</html>
