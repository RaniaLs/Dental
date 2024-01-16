

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>>Make an appointment</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #000;
            color: white;
        }
        .navbar-brand {
            color: white;
        }
        .dropdown-item{
            color:white;
        }
        .nav-link {
            color: white !important;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #1e73c4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #d7d8c5;
        }
    </style>
</head>
<body class="p-0 m-0 border-0 bd-example" style="background-color: white;">
<nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dental Clinic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="Home.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="APPOINT.PHP">Appointments</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Doctors Listing
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item" href="doctor1.html">Dr.Gabriel</a></li>
                        <li><a class="dropdown-item" href="doctor2.html">Dr.Thomas</a></li>
                        <li><a class="dropdown-item" href="doctor3.html">Dr.Emma</a></li>
                        <li><a class="dropdown-item" href="doctor4.html">Dr.David</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu bg-black">
                        
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Log out</a></li>

                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
    <div class="container">
        <h2>Make an appointment</h2>
        <form action="reservation.php" method="post">
            <label for="app_name">Name :</label>
            <input type="text" id="app_name" name="app_name" required>

            <label for="app_email">Email :</label>
            <input type="email" id="app_email" name="app_email" required>

            <label for="app_phone">Phone :</label>
            <input type="tel" id="app_phone" name="app_phone" required>

            <label for="app_date">Date :</label>
            <input type="date" id="app_date" name="app_date" required>

            <label for="app_hour">Hour :</label>
            <input type="time" id="app_hour" name="app_hour" required>

            <label for="app_reason">Reason for consultation: :</label>
            <select id="app_reason" name="app_reason" required>
            <option value="examen"></option>
                <option value="examen">Orthodontics</option>
                <option value="nettoyage">Oral surgery</option>
                <option value="traitement">Dental treatment</option>
                <option value="traitement">Prosthodontics</option>

            </select>

            <label for="app_message">Message (optional) :</label>
           <textarea id="message" name="app_message" rows="5" cols="50"></textarea>

            <br>
            <br>
            <button type="submit" name="book">Book an appointment</button>
        </form>
    </div>
</body>
</html>
