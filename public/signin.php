<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "clinic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    
}

if (isset($_POST['sign_in'])) {
    $username = $_POST['user_username'];
    $email = $_POST['user_email'];
    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

    // Vérifier si le compte existe déjà
    $sql_check_account = "SELECT * FROM `users` WHERE `username` = :username OR `email` = :email";
    
    try {
        $stmt_check_account = $conn->prepare($sql_check_account);
        $stmt_check_account->bindParam(':username', $username);
        $stmt_check_account->bindParam(':email', $email);
        $stmt_check_account->execute();
        
        $user = $stmt_check_account->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Afficher un message d'erreur si le compte existe déjà
            echo "Erreur : Un compte existe déjà avec ce nom d'utilisateur ou cette adresse e-mail. <a href='signup.html'>Inscrivez-vous ici</a>.";
            exit();
        }

        // Insérer le nouvel utilisateur
        $sql_insert_user = "INSERT INTO `users`(`username`, `email`, `password`) VALUES (:username, :email, :password)";
        
        $stmt_insert_user = $conn->prepare($sql_insert_user);
        $stmt_insert_user->bindParam(':username', $username);
        $stmt_insert_user->bindParam(':email', $email);
        $stmt_insert_user->bindParam(':password', $password);
        $stmt_insert_user->execute();

        // Rediriger vers la page après connexion
        header("Location: page_apres_connexion.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
        exit(); 
    }
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
        
        .navbar-brand, .nav-link, .dropdown-item {
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
            color: #000000;
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
    <div class="form-container">
        <form method="post" action="page_apres_connexion.php">
            <h2>Sign In</h2>

            <label for="user_username"><b>Username:</b></label>
            <input type="text" id="user_username" name="user_username" required>

            <label for="user_email"><b>Email:</b></label>
            <input type="email" id="user_email" name="user_email" required>

            <label for="user_password"><b>Password :</b></label>
            <input type="password" id="user_password" name="user_password" required>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                    <b> Remember me </b>
                </label>
            </div>
            <div class="col-auto mx-auto">
            <button type="submit" name="sign_in" value="Sign in">Sign in</button>
            </div>
        </form>
    </div>
    </body>
    </html>
