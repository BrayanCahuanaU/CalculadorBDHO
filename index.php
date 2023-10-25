<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Bases Numéricas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Bases Numéricas</h1>
        <form method="post">
            <label for="number">Número:</label>
            <input type="text" name="number" id="number" required>
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
            $number = $_POST['number'];
            $base = intval($_POST['base']);

            $decimalNumber = base_convert($number, $base, 10);
            $binaryNumber = base_convert($number, $base, 2);
            $hexNumber = base_convert($number, $base, 16);
            $octalNumber = base_convert($number, $base, 8);

            echo "<h2>Resultados:</h2>";
            echo "Decimal: $decimalNumber<br>";
            echo "Binario: $binaryNumber<br>";
            echo "Hexadecimal: $hexNumber<br>";
            echo "Octal: $octalNumber<br>";
        }
        ?>
    </div>
</body>
</html>
