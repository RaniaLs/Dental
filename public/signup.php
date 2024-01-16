<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

try {
    $conn = new PDO("mysql:host=$servename;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "La connexion a été bien établie";
} 
catch (PDOException $e) {
}

if (isset($_POST['add_patient'])) {
    $name = ($_POST['patient_name']);
    $email = ($_POST['patient_email']);
    $phone = ($_POST['patient_phone']);
    $birthdate = ($_POST['patient_birthday']);
    $password = ($_POST['patient_password']);

    $sql = "INSERT INTO `patients`(`name`, `email`, `phone`, `birthdate`, `password`) VALUES (:name, :email, :phone, :birthdate, :password)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':birthdate', $birthdate);
    $stmt->bindParam(':password', $password);

    // Exécuter la requête
    $stmt->execute();

    // Rediriger l'utilisateur après l'ajout du patient
    header("Location: page_apres_inscription.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
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

        .form-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc;
        width: 400px;
        margin: auto;
        margin-top: 20px;
        color: #000000;
    }

        h2 {
            text-align: center;
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
            color: black;
        }

        button {
            background-color: #1e73c4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
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
                        <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                        <li><a class="dropdown-item" href="signin.html" href=>Sign in</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" action="search.php" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
        </div>
    </div>
</nav>
<div class="form-container bg-light">

    <form method="post" action="">
        <h2>Sign Up</h2>
        <label for="patient_name"><b>Name:</b></label>
        <input type="text" id="patient_name" name="patient_name" required>


        <label for="patient_email"><b>Email:</b></label>
        <input type="email" id="patient_email" name="patient_email" required >

        <label for="patient_phone"><b>Phone:</b></label>
        <input type="tel" id="patient_phone" name="patient_phone" required>
       

        <label for="patient_birthday"><b>Date of Birth:</b></label>
        <input type="date" id="patient_birthday" name="patient_birthday" required>

        <label for="patient_password"><b>Password:</b></label>
        <input type="password" id="patient_password" name="patient_password" required>

        <button type="submit" name="add_patient" value="Sign up" >Sign up</button>
    </form>
</div>

</body>
</html>
