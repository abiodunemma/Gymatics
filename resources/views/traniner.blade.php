<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Gym Trainers</title>
   <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: #333;
    }

    .container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        margin-bottom: 1rem;
        font-size: 2rem;
        color: #333;
    }

    p {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 1rem;
    }

    .trainers-list {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .trainer-card {
        background-color: #e0f7fa;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .trainer-card h2 {
        font-size: 1.5rem;
        color: #00796b;
        margin-bottom: 0.5rem;
    }

    .trainer-card p {
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }

    .trainer-card a {
        color: #00796b;
        text-decoration: none;
    }

    .trainer-card form {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    label {
        font-size: 0.9rem;
        color: #555;
    }

    button[type="submit"] {
        margin-top: 0.5rem;
        padding: 0.5rem;
        background-color: #00796b;
        color: #fff;
        font-size: 1rem;
        font-weight: bold;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #004d40;
    }

   </style>
</head>
<body>
    <div class="container">
        <h1>Available Gym Trainers</h1>
        <p>Select a trainer to view their details and book a session.</p>

        <div class="trainers-list">
            <!-- Trainer Card -->
            <div class="trainer-card">
                <h2>John Doe</h2>
                <p>📞 Phone: <a href="tel:+1234567890">+1 234 567 890</a></p>
                <p>✉️ Email: <a href="mailto:john.doe@example.com">john.doe@example.com</a></p>
                <form action="#" method="post">
                    <label>
                        <input type="radio" name="session-1" value="morning" required> Morning Session
                    </label>
                    <label>
                        <input type="radio" name="session-1" value="evening" required> Evening Session
                    </label>
                    <button type="submit">Book Session</button>
                </form>
            </div>

            <!-- Another Trainer Card -->
            <div class="trainer-card">
                <h2>Jane Smith</h2>
                <p>📞 Phone: <a href="tel:+1987654321">+1 987 654 321</a></p>
                <p>✉️ Email: <a href="mailto:jane.smith@example.com">jane.smith@example.com</a></p>
                <form action="#" method="post">
                    <label>
                        <input type="radio" name="session-2" value="morning" required> Morning Session
                    </label>
                    <label>
                        <input type="radio" name="session-2" value="evening" required> Evening Session
                    </label>
                    <button type="submit">Book Session</button>
                </form>
            </div>

            <!-- Add more trainer cards as needed -->
        </div>
    </div>
</body>
</html>
