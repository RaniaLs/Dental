<?php
$servename = "localhost";
$username = "root";
$password = ""; 
$dbname = "clinic";

try {
    $conn = new PDO("mysql:host=$servename;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Gestion de l'erreur de connexion
    echo "Erreur de connexion : " . $e->getMessage();
}

if (isset($_POST['reserve_appointment'])) {
    $patient_id = $_POST['patient_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $doctor_id = $_POST['doctor_id']; 

   

    // la disponibilité du rendez-vous
    $availability_sql = "SELECT * FROM appointments WHERE appointment_date = :appointment_date AND appointment_time = :appointment_time";
    $availability_stmt = $conn->prepare($availability_sql);
    $availability_stmt->bindParam(':appointment_date', $appointment_date);
    $availability_stmt->bindParam(':appointment_time', $appointment_time);
    $availability_stmt->execute();

    if ($availability_stmt->rowCount() > 0) {
        // Le rendez-vous est déjà pris, affichez un message d'erreur
        echo "Le rendez-vous à cette date et heure est déjà pris. Veuillez choisir une autre date/heure.";
    } else {
        // Réservez le rendez-vous
        $reserve_sql = "INSERT INTO appointments (appointment_date, appointment_time, doctor_id, patient_id) VALUES (:appointment_date, :appointment_time, :doctor_id, :patient_id)";
        $reserve_stmt = $conn->prepare($reserve_sql);
        $reserve_stmt->bindParam(':appointment_date', $appointment_date);
        $reserve_stmt->bindParam(':appointment_time', $appointment_time);
        $reserve_stmt->bindParam(':doctor_id', $doctor_id);
        $reserve_stmt->bindParam(':patient_id', $patient_id);
        $reserve_stmt->execute();

        // un message de succès ou redirigez vers une page de confirmation
        echo "Le rendez-vous a été réservé avec succès.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make an appointment</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
            background-color:#f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: #0e0f0f;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            width: 400px;
            margin: auto;
            margin-top: 20px;
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
            color: white;
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
            background-color: #d7d8c5;
        }

        .container {
            padding: 20px;
            max-width: 80%;
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
    </style>
</head>
<body class="p-0 m-0 border-0 bd-example" style="background-color: white;"></body>
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
                <a class="nav-link" href="index1.html">Appointments</a>

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
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.html">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h2>Réserver un rendez-vous</h2>
<form action="votre_script_php.php" method="post">
    <label for="patient_id">ID du patient:</label>
    <input type="text" id="patient_id" name="patient_id" required>

    <label for="appointment_date">Date du rendez-vous:</label>
    <input type="date" id="appointment_date" name="appointment_date" required>

    <label for="appointment_time">Heure du rendez-vous:</label>
    <input type="time" id="appointment_time" name="appointment_time" required>

    <label for="doctor_id">ID du médecin:</label>
    <input type="text" id="doctor_id" name="doctor_id" required>

    <button type="submit" name="reserve_appointment">Réserver le rendez-vous</button>
</form>

</body>
</html>
     <!-- Modal -->
     <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make an appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Select a date:</p>
                    <input type="text" id="datepicker" class="form-control" placeholder="Select a date" autocomplete="off">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
    // Initialisation du datepicker
    $(document).ready(function () {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });

        // Gestionnaire d'événements pour le bouton "Save"
        $('#appointmentModal').on('click', '.btn-primary', function () {
            // Récupérer la valeur de la date
            var selectedDate = $('#datepicker').val();
            
            // Faites ici ce que vous souhaitez faire avec la date, par exemple l'enregistrer.
            console.log('Date selected:', selectedDate);

            // Fermer le modal
            $('#appointmentModal').modal('hide');
        });
    });
    </script>
</body>
</html>
