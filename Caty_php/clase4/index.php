<html>
<head>
    <title>Una calculadora simple</title>
</head>
<body>
    <form action="operar.php" method="post">
        Ingrese primer valor:
        <input type="text" name="valor1">
        <br>
        Ingrese segundo valor:
        <input type="text" name="valor2">
        <br>
        <select name="operacion">
            <option value="suma">sumar</option>
            <option value="resta">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <br>
        <input type="submit" name="Calcular">
    </form>
</body>
</html>