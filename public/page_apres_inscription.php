<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <style>
        body {
            font-family: 'Roboto', 'Arial', sans-serif;
            background-color: #fff;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #4285f4;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
            text-align: center;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeInUp 1s ease-out 1.5s forwards, congrats 2s ease-out 2s forwards;
        }

        h1 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #fff;
        }

        .reserve-button {
            display: inline-block;
            padding: 15px 30px;
            text-decoration: none;
            background-color: #210cdd;;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }

        .reserve-button:hover {
            background-color: #1a4f9c;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes congrats {
            from {
                transform: scale(0.8);
            }
            to {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Congratulations!</h1>
        <p>Your registration has been successful. Welcome to our website.</p>

        <p>You can now sign in to reserve an appointment.</p>
        <a href="signin.php" class="reserve-button">Sign In to Reserve</a>
    </div>

</body>
</html>
