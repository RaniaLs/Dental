<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Lists</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iKDErJS1QGmPHDnmI9XKi1aF4oQPxVn3IHwO8s3mR4ZIfR6trF+eA2P4Q" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #1e73c4;
            color: white;
            text-align: center;
            padding: 10px;
        }

        main {
            padding: 20px;
        }

        .reservation-list {
            margin-top: 0px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #1e73c4;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .confirm-button {
            background-color: #1e73c4;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        .confirm-button.confirmed {
            background-color: #4CAF50;
        }

        footer {
            background-color: #1e73c4;
            color: white;
            text-align: center;
            padding: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Appointment Lists</h1>
    </header>

    <main>
        <?php

        // Section pour afficher les réservations
        echo '<section class="reservation-list">';
        echo '<h2>Appointment</h2>';

        
        // (Assure que les informations de connexion sont correctes)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "clinic";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL pour récupérer les réservations
            $sql = "SELECT * FROM reservations";
            $stmt = $conn->query($sql);

            // Vérifiez s'il y a des réservations
            if ($stmt->rowCount() > 0) {
                // Affichez les réservations dans un tableau
                echo '<table>';
                echo '<thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Hour</th><th>Reason</th><th>Message</th><th>Action</th></tr></thead>';
                echo '<tbody>';

                // Affichez chaque réservation
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['date'] . '</td>';
                    echo '<td>' . $row['hour'] . '</td>';
                    echo '<td>' . $row['reason'] . '</td>';
                    echo '<td>' . $row['message'] . '</td>';
                    echo '<td><button class="confirm-button" onclick="confirmAppointment(this)">Confirmed</button></td>';
                    echo '</tr>';
                }

                echo '</tbody></table>';
            } else {
                echo '<p>Aucune réservation pour le moment.</p>';
            }
        } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
        }

        // Fermez la connexion à la base de données
        $conn = null;

        echo '</section>';
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Admin Area</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha384-oq0xwa6D0fZa2aAZrSn1j2e4RvOKtjjD1lHmBO2On7UzNqU8hV20U8D0CZd66tYD" crossorigin="anonymous"></script>
    <script>
        function confirmAppointment(button) {
            button.classList.add('confirmed');
            button.disabled = true; 
        }
    </script>
</body>
</html>
