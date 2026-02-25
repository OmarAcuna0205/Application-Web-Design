<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <h1>Suma</h1>
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required value="{{ $num1 ?? '' }}">
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required value="{{ $num2 ?? '' }}">
        <br><br>
        <input type="submit" value="Calcular Suma">
    </form>
    
    @if(isset($resultado))
        <hr>
        <h2>Resultado</h2>
        <p><strong>{{ $num1 }} + {{ $num2 }} = {{ $resultado }}</strong></p>
    @endif
</body>
</html>