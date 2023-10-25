<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Conversiones</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="contenedor">
        <h1>Calculadora de Conversiones</h1>
        <form method="post" onsubmit="return validateInput()">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" placeholder="Escribe Aquí" required>
            <label for="base">Base:</label>
            <select name="base" id="base" required>
                <option value="2">Binario</option>
                <option value="10">Decimal</option>
                <option value="16">Hexadecimal</option>
                <option value="8">Octal</option>
            </select>
            <input type="submit" name="convert" value="Convertir">
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $Numero = $_POST['numero'];
            $base = intval($_POST['base']);

            $decimalNumero = base_convert($Numero, $base, 10);
            $binaryNumero = base_convert($Numero, $base, 2);
            $hexNumero = base_convert($Numero, $base, 16);
            $octalNumero = base_convert($Numero, $base, 8);

            echo "<h2>Resultados:</h2>";
            echo "<div class='resultados'>";
            echo "<p>Decimal       : $decimalNumero</p>";
            echo "<p>Binario       : $binaryNumero</p>";
            echo "<p>Hexadecimal   : $hexNumero</p>";
            echo "<p>Octal         : $octalNumero</p>";
            echo "<div/>";

        }
        ?>
    </div>
</body>
</html>
