<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body, html {
                height: 100%;
                font-family: Arial, sans-serif;
                color: #ffffff;
                background: #121212;
            }

            .booking-section {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background: url('gym-background.jpg') no-repeat center center/cover;
                color: #ffffff;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 1;
            }

            .container {
                position: relative;
                z-index: 2;
                text-align: center;
                max-width: 600px;
                padding: 20px;
                background: rgba(0, 0, 0, 0.6);
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
            }

            h1 {
                font-size: 32px;
                margin-bottom: 10px;
            }

            p {
                font-size: 18px;
                margin-bottom: 30px;
            }

            .session-options {
                display: flex;
                gap: 20px;
                justify-content: center;
            }

            .session-card {
                flex: 1;
                padding: 20px;
                background-color: #1c1c1c;
                border-radius: 8px;
                text-align: center;
                transition: transform 0.3s, background-color 0.3s;
            }

            .session-card h2 {
                font-size: 24px;
                margin-bottom: 10px;
                color: #ff4b2b;
            }

            .session-card p {
                font-size: 16px;
                margin-bottom: 20px;
                color: #cccccc;
            }

            .session-card button {
                padding: 10px 20px;
                border: none;
                background-color: #ff4b2b;
                color: #ffffff;
                font-weight: bold;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .session-card button:hover {
                background-color: #ff6a4a;
            }

            .session-card:hover {
                transform: translateY(-5px);
                background-color: #252525;
            }

        </style>

    <title>Gym Session Booking</title>

</head>
<body>

    <!-- Booking Section -->
    <div class="booking-section">
        <div class="overlay"></div>
        <div class="container">
            <h1>Book Your Gym Session</h1>
            <p>Select your preferred session to reserve your spot:</p>

            <div class="session-options">
                <div class="session-card morning">
                    <h2>Morning Session</h2>
                    <p>6:00 AM - 12:00 PM</p>
                    <button onclick="bookSession('Morning')">Book Morning</button>
                </div>

                <div class="session-card evening">
                    <h2>Evening Session</h2>
                    <p>4:00 PM - 9:00 PM</p>
                    <button onclick="bookSession('Evening')">Book Evening</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function bookSession(session) {
            alert(`You have successfully booked the ${session} session!`);
        }
    </script>
</body>
</html>
