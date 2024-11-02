<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Batch Booking</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0eaf0;
        margin: 0;
        padding: 0;
    }

    header {
        background: #f8f7f7;
        color: #ee78b5;
        padding: 20px;
        text-align: center;
    }

    main {
        padding: 20px;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    label {
        display: block;
        margin: 10px 0 5px;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    fieldset {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
    }

    button {
        background: #c91319;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background: #4cae4c;
    }

    .hidden {
        display: none;
    }

    footer {
        text-align: center;
        padding: 20px;
        background: #f0ebeb;
        color: rgb(220, 31, 213);
    }

  </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Gym</h1>
        <p>Book your session now!</p>
    </header>

    <main>
        <form action="/booking" accept="/welcome" method="POST" enctype="multipart/form-data">
@csrf

            <input type="hidden" id="userid" name="userid" value="{{ Auth::user()->id  }}">
            <input type="hidden" id="email" name="email" value="{{ Auth::user()->email  }}">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email1" id="email1" name="email1" required>

            <fieldset>
                <legend>Select a Batch:</legend>
                <label>
                    <input type="radio" id="batch1" name="batch1" value="morning" required>
                    Morning Batch
                </label>
                <label>
                    <input type="radio" id="batch2" name="batch1" value="evening">
                    Evening Batch
                </label>
            </fieldset>

          <center>  <button type="submit">Book Now</button></center>
        </form>

        <div id="response" class="hidden"></div>
    </main>

    <footer>
        <h3>Adeyemi-Abiodun | php laravel dev  </h3>
    </footer>

    <script>
        document.getElementById('booking-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const batch = document.querySelector('input[name="batch"]:checked').value;

            document.getElementById('response').innerText = `Thank you, ${name}! You have booked the ${batch} batch.`;
            document.getElementById('response').classList.remove('hidden');
            this.reset();
        });
    </script>
</body>
</html>


