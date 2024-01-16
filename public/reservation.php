<?php
$servename = "localhost";
$username = "root";
$password = ""; 
$dbname = "clinic";

try {
    $conn = new PDO("mysql:host=$servename;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifiez si le formulaire a été soumis
    if (isset($_POST['book'])) {
        // Récupérez les données du formulaire
        $name = $_POST['app_name'];
        $email = $_POST['app_email'];
        $phone = $_POST['app_phone'];
        $date = $_POST['app_date'];
        $hour = $_POST['app_hour'];
        $reason = $_POST['app_reason'];
        $message = $_POST['app_message'];

        // Préparez la requête SQL pour l'insertion
        $sql = "INSERT INTO `reservations` (`name`, `email`, `phone`, `date`, `hour`, `reason`, `message`) 
                VALUES (:name, :email, :phone, :date, :hour, :reason, :message)";

        // Préparez et exécutez la requête
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':hour', $hour);
        $stmt->bindParam(':reason', $reason);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        // Fermez la connexion après avoir traité la requête SQL
        $conn = null;

        header("Location: confirmation_reservation.php");
        exit();
    }

    // Si le formulaire n'a pas été soumis, redirigez l'utilisateur vers la page de réservation
    header("Location: page_reservation.php");
    exit();
} catch (PDOException $e) {
    // Gestion des erreurs de la base de données
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>
 <h1>Reservation confirmation</h1>
    <p>Thank you for your reservation. Your request has been submitted successfully.</p>
    <p>We will contact you soon to confirm your appointment details.</p>
