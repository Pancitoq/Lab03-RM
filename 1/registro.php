<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Melendez</title>
<style>
		form {
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 500px;
    margin: 0 auto;
}

	h2 {
		font-family: sans-serif;
		text-align: center
}

	label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
	font-family: sans-serif;
}

input[type="submit"] {
    background-color: #228dff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

	input[type="text"],
	input[type="email"] {
    border: 1px solid #ccc;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 20px;
}

	
</style>

</head>
<body>

<h2>Registro de usuario</h2>

	<form method="post" action="mostrarRegistro.php">

		<label for="nombre">Nombre:</label>

		<input type="text" name="nombre" required>

		<br>
		<label for="email">Correo electrónico:</label>

		<input type="email" name="email" required>

		<br><br>
		<input type="submit" value="Enviar">
	</form>

</body>
</html>