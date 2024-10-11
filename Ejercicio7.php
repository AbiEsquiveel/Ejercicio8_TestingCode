<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Página Mixta</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Bienvenidos a mi página mixta</h1>
    <p>Esta es una <strong>página web simple</strong></p>
    <button onclick="showMessage()">Haz clic aquí</button>
    <script>
        function showMessage() {
            alert("Hola, bienvenido!");
        }
    </script>
    <?php
    $nombre = "Juan";
    echo "<p>Hola, $nombre</p>";
    echo "<p>Bienvenido a nuestra página</p>";
    ?>
</body>
</html>

<!-- El codigo esta bien -->