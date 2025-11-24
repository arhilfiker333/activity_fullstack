<!--Aiden Hilfiker - 11/24/25*/-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting PHP to MySQL</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css"/>
    <script src="scripts/form-validation.js" defer></script>
</head>
<body>
    <header>
        <h1>Connecting PHP to MySQL</h1>
    </header>
    <main>
            <p>
                Aiden Hilfiker
            </p>
            <p>
                11/24/25
            </p>

            <?php
            $conn = new mysqli("localhost", "root", "mysql", "mysql");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                echo "Connection successful!";
            }
            $conn->close();
            ?>
    </main>
    <footer>
    </footer>
</body>
</html>