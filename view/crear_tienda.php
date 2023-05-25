<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crear_tienda.css">
    <link rel="stylesheet" href="index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
    <nav class="navegador">
        <ul>
            <a href="index.php">Productos</a>
            <a href="tiendas.php">Tiendas</a>
            <a href="crear_tienda.php">Crear tiendas</a>
        </ul>
    </nav>
</header>

<body>
            <table class="table table-striped-columns text-center" id="table-especies">
                <caption Id="description-table">Número de tiendas<span id="num-table"></span></caption>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de apertura</th>
                    </tr>
                </thead>
                <tbody class="">

                </tbody>
            </table>

            <script src="../js/tienda.js"></script>
</body>
</html>