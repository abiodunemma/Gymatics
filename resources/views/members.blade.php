<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Membership Application</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('/img/view1.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 2rem;
            border-radius: 8px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #ffcc00;
        }

        p {
            text-align: center;
            margin-bottom: 2rem;
        }

        .membership-options {
            display: flex;
            justify-content: space-around;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .membership-card {
            background-color: #333;
            border: 1px solid #fff;
            border-radius: 8px;
            padding: 1rem;
            width: 30%;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .membership-card:hover {
            transform: scale(1.05);
            background-color: #444;
        }

        .membership-card input[type="radio"] {
            display: none;
        }

        .membership-details h2 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #ffcc00;
        }

        .membership-details p {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #ffcc00;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 1rem;
            background-color: #ffcc00;
            border: none;
            color: #333;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #ffdd33;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Join Our Gym</h1>
        <p>Choose your membership plan and start your fitness journey!</p>

        <form action="#" method="post">
            <div class="membership-options">
                <label class="membership-card">
                    <input type="radio" name="membership" value="regular" checked>
                    <div class="membership-details">
                        <h2>Regular</h2>
                        <p>Price: $30,000</p>
                        <p>Excludes Saturday, Sunday & Evening Sessions</p>
                    </div>
                </label>

                <label class="membership-card">
                    <input type="radio" name="membership" value="vip">
                    <div class="membership-details">
                        <h2>VIP</h2>
                        <p>Price: $50,000</p>
                        <p>Includes Saturday, Excludes Sunday</p>
                    </div>
                </label>

                <label class="membership-card">
                    <input type="radio" name="membership" value="classic">
                    <div class="membership-details">
                        <h2>Classic</h2>
                        <p>Price: $70,000</p>
                        <p>All Sessions Available</p>
                    </div>
                </label>
            </div>

            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <button type="submit">Submit Application</button>
        </form>
    </div>
</body>
</html>
