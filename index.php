<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Calculadora</title>
    </head>
    <body>
        <h1>Calculadora Trabalho</h1>
        <form method="post" action="index.php">
            <input type="text" step="0.001" name="v1">
            <input type="text" step="0.001" name="v2"><br>
            <select name="operacao">
                <option value='somar'>Somar</option>
                <option value='subtrair'>Subtrair</option>
                <option value='multiplicar'>Multiplicar</option>
                <option value='dividir'>Dividir</option>
            </select><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        include ('calcular.php');
        ?>
    </body>
</html>
