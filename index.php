<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['var1'] ?? 0; #
        $valor2 = $_GET['var2'] ?? 0;
        $butao0 = 0;
        $butao1 = 1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for='var1'>Valor 1</label>
            <input type="number" name="var1" id="valor1" value="<?=$valor1?>">
            <label for="var2"> Valor 2</label>
            <input type="number" name="var2" id="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
            
            <input type="button" name="but" id="butao0" value="<?=$butao0?> <?php echo "0"?>">
            <input type="button" name="but" id="butao1" value="<?php echo "1"?>">
        </form>
    </main>

    <section id="resulatado">
        <h2>resultado</h2>
        <?php 
            $soma = $valor1 + $valor2;
            if ($soma ==0):
                echo "<P>Digite numeros</p>";
            else:
                print "<p>A soma de $valor1 e $valor2 é igual a $soma.</p>";
            
            endif;
            
        ?>
    </section>
</body>
</html>