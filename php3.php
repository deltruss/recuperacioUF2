<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Daniel de Tena</title>
    <h3>Calculadora per calcular tot el que tu vols</h3>
</head>
<body>
    <form method="get" action="calculadoraDanielDeTena.php">
		<input type="text" name="primerNumero">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
		<input type="text" name="segonNumero">
		<input type="submit" value="Calcular">
	</form>
    <?php
        if(isset($_POST['Calcular'])){
        $numero1 = $_POST['primerNumero'];
        $numero2 = $_POST['segonNumero'];
        $operador = $_POST['operador'];
        if($operador = "+"){
            $resultat = $numero1 + $numero2;
        }else if($operador = "-"){
            $resultat = $numero1 - $numero2;
        }else if($operador = "*"){
            $resultat = $numero1 * $numero2;
        }else if($operador = "/"){
            $resultat = $numero1 / $numero2;
        }
    }
        echo "<br><br>" ;
        echo "El resultat es " .$resultat ;
    ?>

</body>
</html>