<!DOCTYPE html>
<html lang="en">
<title>Make an appointment</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dental Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        
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

        body {
            font-family: Arial, sans-serif;
            background-image: url("clinic.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
      }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            width: 300px;
            margin: auto;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #0c0c0c;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .container {
            padding: 20px;
            max-width: 100%;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin: auto;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .reserve-btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .reserve-btn:hover {
            background-color: #45a049;
        }

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            position: relative;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 80px;
            animation: colorChange 3s infinite alternate; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            
        }

        @keyframes colorChange {
            50% {
                color: rgb(184, 50, 123);
            }
             
            50% {
                color: rgb(19, 185, 149);
            }
            50% {
                color: rgb(219, 27, 117);
            }

            100% {
                color: rgb(19, 37, 143);
            }
        }

        h3{
            color: #09363b;
        }
         
       h6{
         font-size: 20px;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         color: #151616;
       }
       .icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }
        .icon-text b:hover {
            color: rgba(245, 244, 248, 0.938); 
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
                            <li><a class="dropdown-item" href="signup.php">Sign up</a></li>
                            <li><a class="dropdown-item" href="signin.php">Sign in</a></li>
                            <li><a class="dropdown-item" href="doc.php">Admin Area</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            
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
         <br>
            <h1>Your Smile Our Priority</h1>
            <br>
            <br>
            <br>
            <br>

            <h2><b>Because your smile is our priority</b></h2>
            <h6><center><b>
                Providing quality dental care in a warm and professional atmosphere. 
                <br>Our dedicated team of passionate dentists is here to take care of your smile. 
                <br>Discover the comfort and confidence offered by our dental clinic, where your oral well-being is our top priority.
            </center></b></h6>
            <br><br>
            <br><br>
            <div>
                <div class="icon-text">
                <img class="icon" src="maps.png" alt="Icône 1"><b>123 Street ABC Morocco</b><br>
                <img class="icon" src="phone.png" alt="Icône 2"><b>+212 123 456 789</b>
            </div>
            </div>
            

    <script>
        function reserveAppointment(doctor, time) {
            alert('Rendez-vous réservé avec le Dr. ' + doctor + ' à ' + time);
            
        }
    </script>
    <div class="content">
    </div>

    <footer>
        <p class="lead">&copy;Dental clinic 2024</p>
    </footer>

    
</body>

</html>
