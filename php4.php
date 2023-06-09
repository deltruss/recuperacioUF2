<!DOCTYPE html>
<html>
<head>
	<title>Daniel de Tena</title>
</head>
<body>
	<h1>Formulari cotxes</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="marca">Marca:</label>
		<input type="text" name="marca" id="marca" required><br><br>

		<label for="model">Model:</label>
		<input type="text" name="model" id="model" required><br><br>

		<label for="motor">Motor:</label>
		<input type="text" name="motor" id="motor" required><br><br>

		<label for="cv">CV:</label>
		<input type="text" name="cv" id="cv" required><br><br>

		<input type="submit" value="Guardar">
	</form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $marca = $_POST['marca'];
            $model = $_POST['model'];
            $motor = $_POST['motor'];
            $cv = $_POST['cv'];

            $txt = fopen('Daniel de Tena.txt', 'a');
            fwrite($txt, "\n$marca");
            fwrite($txt, "-$model");
            fwrite($txt, "-$motor");
            fwrite($txt, "-$cv CV\n");
            fclose($txt);
            
            echo "<br><br>" ;
            $text = fopen('Daniel de Tena.txt', 'r');
            while(!feof($text)){
                $linea = fgets($text) ;
                echo "$linea <br>" ;
            }
        }
     ?>

</body>
</html>

