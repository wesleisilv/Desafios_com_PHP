<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário da idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $ano_n = $_GET["a_nascimento"];
    $ano_a = $_GET["a_atual"];
    ?>
    <main>
        <h2>Calcular idade</h2>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="ano_nascimento">Digite o ano que você nasceu:</label>
            <input type="number" name="a_nascimento" id="a_nascimento">
            <label for="ano_atual">Digite o ano atual:</label>
            <input type="number" name="a_atual" id="a_atual">
            <input type="submit" value="Calcular a idade" >
        </form>
    </main>
   
    <section id="result">
        <h2>Resultado:</h2>
        <?php 
        $idade = $ano_a - $ano_n;
        print "Sua idade é <strong>$idade</strong>";
        ?>
    </section>
</body>
</html>