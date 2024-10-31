<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymatic</title>
   <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body, html {
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 1em 2em;
    }

    .logo {
        font-size: 24px;
        color: white;
        font-weight: bold;
    }

    .nav-links {
        list-style: none;
        display: flex;
    }

    .nav-links li {
        margin-left: 20px;
    }

    .nav-links a {
        text-decoration: none;
        color: white;
        font-weight: 500;
    }

    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        color: white;
        text-align: center;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        padding: 1em;
    }

    .hero-content h1 {
        font-size: 48px;
        margin-bottom: 0.5em;
    }

    .hero-content p {
        font-size: 18px;
        margin-bottom: 1em;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff4b2b;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #ff3a1a;
    }

    /* Background Slider */
    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        animation: slide 15s infinite;
        z-index: 0;
        opacity: 0.7;
    }

    /* Change background images */
    @keyframes slide {
        0% {
            background-image: url('/img/view3.jpg');
        }
        33% {
            background-image: url('/img/view2.jpg');
        }
        66% {
            background-image: url('/img/view1.jpg');
        }
        100% {
            background-image: url('/img/view2.jpg');
        }
    }

   </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <div class="logo">Gymatic</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="/booking">book</a></li>
                <li><a href="/members">membership</a></li>
                <li><a href="/traniner">trainers</a></li>
                <li><a href="#">Join Now</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Achieve Your Fitness Goals</h1>
            <p>Join Gymatic today and start your journey toward a healthier, stronger you.</p>
            <a href="/register" class="btn">Get Started</a>
        </div>
    </div>
</body>
</html>
