<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page après Connexion</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f8fd;
            color: #3a3a3a;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #0077cc;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #0077cc;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #005a99;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website</h1>
    <p>You are logged in as a doctor</p>
    <a href="Espace.php" title="View appointments">View your appointments</a>
</body>
</html>
