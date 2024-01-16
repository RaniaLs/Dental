<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    
    exit();
}

// Check if the 'search' parameter exists in the URL
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Prepare a query to search the 'articles' table
    $sql = "SELECT * FROM articles WHERE title LIKE :searchTerm OR content LIKE :searchTerm";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display search results
        echo "<h2>Search Results for: $searchTerm</h2>";

        if (count($results) > 0) {
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li>{$result['title']} - {$result['content']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No results found.</p>";
        }
    } catch (PDOException $e) {
        echo "Search Error: " . $e->getMessage();
        exit();
    }
} else {
    // If the 'search' parameter is not present in the URL
    echo "<p>No search term provided.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Add links-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-3">
</div>
</body>
</html>
