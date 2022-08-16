<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    {{-- pasar datos a las vistas --}}
    {{-- es importante que las vistas tengan la minima logica posible solo imprimir
    variables, hacer estructuras de control ejmp: if else hacer loop  --}}
    Bienvenido@ <?php echo $nombre  ?? "Invitado"?>
</body>
</html>