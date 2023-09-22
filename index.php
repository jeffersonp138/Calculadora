<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    

<main>
    <form name="calculadora">
        <input type="texfield" name="valor" value="">
        <br>
        <input type="button" value="1" onclick="document.calculadora.valor.value+='1'">
        <input type="button" value="2" onclick="document.calculadora.valor.value+='2'">
        <input type="button" value="3" onclick="document.calculadora.valor.value+='3'">
        <input type="button" value="+" onclick="document.calculadora.valor.value+='+'">
        <br>
        <input type="button" value="4" onclick="document.calculadora.valor.value+='4'">
        <input type="button" value="5" onclick="document.calculadora.valor.value+='5'">
        <input type="button" value="6" onclick="document.calculadora.valor.value+='6'">
        <input type="button" value="-" onclick="document.calculadora.valor.value+='-'">
        <br>
        <input type="button" value="7" onclick="document.calculadora.valor.value+='7'">
        <input type="button" value="8" onclick="document.calculadora.valor.value+='8'">
        <input type="button" value="9" onclick="document.calculadora.valor.value+='9'">
        <input type="button" value="X" onclick="document.calculadora.valor.value+='*'">
        <br>
        <input type="button" value="," onclick="document.calculadora.valor.value+='.'">        
        <input type="button" value="0" onclick="document.calculadora.valor.value+='0'">
        <input type="button" value="/" onclick="document.calculadora.valor.value+='/'">

        <input type="button" value="=" onclick="document.calculadora.valor.value=eval(document.calculadora.valor.value)">

        <input type="reset" value="C">
        

    </form>
</main>


</body>
</html>