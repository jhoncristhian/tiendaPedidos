
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis juguetes felices</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
        include_once('layout/menu.php');
    ?>
        <div style="text-align: center; padding-bottom: 20px">
            <input id="btodo" type="button"  value="todo"></input>
            <input id="boferta" type="button" value="oferta"></input>
            <div style="display: inline-flex">
                <input id="buscar" type="search" class='input' placeholder="search"></input><img type="button" id="lupa" src="img/lupa.png">
            </div>
        </div>
        
    <main id="main">
        <?php
            $response = json_decode(file_get_contents('http://localhost/CarritoDeCompras/api/productos/api-productos.php?categoria=juguetes'), true);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                echo $response['response'];
            }
        ?>
        
    </main>

    <script src="js/main.js"></script>
    <script src="js/funcion.js"></script>
</body> 
    <p style="text-align:center">Contactos: 92803369</p>
    <footer style="text-align: center">Todos los derechos reservados por Mis Juguetes Felices, Ayacucho - Huamanga 2021</footer>
</html>
