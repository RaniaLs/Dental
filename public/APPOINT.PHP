<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make an appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2, h1 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #1e73c4;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #15559b;
        }

        .table {
            margin-top: 20px;
        }

        th, td {
            text-align: center;
        }
        .home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #000102;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<a class="home-button" href="Home.html">Home</a>
    <div class="container">
        <?php
        // Démarrez la session
        session_start();

        // Vérifiez si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            // Si oui, affichez le contenu pour les rendez-vous disponibles
            echo '<h1>Rendez-vous disponibles</h1>';
            // Ajoutez ici la logique pour afficher les créneaux horaires disponibles
            echo '<p>Connectez-vous ou créez un compte pour réserver un rendez-vous.</p>';
            // Ajoutez ici les liens vers les pages de connexion et d'inscription
            echo '<a href="login.php">Connexion</a> | <a href="register.php">Inscription</a>';
        } else {
            // Si non, affichez le contenu pour prendre un rendez-vous
            echo '<h2>Make an appointment</h2>';
            echo '<p>Here is our work schedule.</p>';
            
            // Vérifiez si le formulaire de réservation a été soumis
            if (isset($_POST['reserver'])) {
                echo '<p style="color: red;">Sign in or Sign up to make an appointment.</p>';
                echo '<p>You can Sign in or Sign up here:</p>';
                
                // Ajoutez des liens vers les pages de connexion et d'inscription
                echo '<div style="text-align: center;">
                <a href="signin.php" class="btn btn-primary">Sign in</a> | <a href="signup.php" class="btn btn-primary">Sign up</a>
            </div>';
            }

            echo '<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Days</th>
                            <th>Hours de Travail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>9h00 - 17h00</td>
                            <td>
                                <form method="post">
                                    <button type="submit" name="reserver" class="btn btn-primary">Réserver</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>9h00 - 17h00</td>
                            <td>
                                <form method="post">
                                    <button type="submit" name="reserver" class="btn btn-primary">Réserver</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>9h00 - 17h00</td>
                            <td>
                                <form method="post">
                                    <button type="submit" name="reserver" class="btn btn-primary">Réserver</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>Thursday</td>
                            <td>9h00 - 17h00</td>
                            <td>
                                <form method="post">
                                    <button type="submit" name="reserver" class="btn btn-primary">Réserver</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>Friday</td>
                            <td>9h00 - 17h00</td>
                            <td>
                                <form method="post">
                                    <button type="submit" name="reserver" class="btn btn-primary">Réserver</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>Saturday</td>
                            <td>9h00 - 12h00</td>
                            <td>
                                <form method="post">
                                    <button type="submit" name="reserver" class="btn btn-primary">Réserver</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>';
        }
        ?>
    </div>
    <!-- Les scripts Bootstrap doivent être inclus de la manière suivante -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
