<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Registro - Melendez</title>
</head>
<body>

<style>
	body {
    font-family: Arial, sans-serif;
    font-size: 16px;
}

	h2 {
    color: #4CAF50;
}

	p {
    margin-bottom: 10px;
}

	strong {
    font-weight: bold;
}

.container {
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 500px;
    margin: 0 auto;
}
</style>
<body>
<div class="container">
        <h2>Mostrar datos del usuario registrado</h2>
        <?php
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];

            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Correo electrónico:</strong> $email</p>";
        ?>
    </div>
    
</body>
</html>