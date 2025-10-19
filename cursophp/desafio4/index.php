<?php 
$salario1 = $_POST["salario"];
$reajuste1 = $_POST["reajuste"];
?>
<section>
    <h2>Resultado:</h2>
    <?php 
    $salario_final = $salario1 + ($salario1 * $reajuste1/100);
    print "Seu salário final, com o reajuste de $reajuste1%, é $salario_final";
    ?>
</section>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>calcular</h2>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            <label for="salario1">Informe seu salário:</label>
            <input type="number" name="salario" id="salario">
            <label for="reajuste1">Informe a porcentagem para reajustar seu salário:</label>
            <input type="number" name="reajuste" id="reajuste">
            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>
</body>
</html>