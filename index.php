<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap  -->
    <!-- my css  -->
    <link rel="stylesheet" href="style.css">
    <!-- /my css  -->
    <title>Php OOP 2</title>
</head>

<body>
    <header>
        <h1 class="text-center my-5">Shop Online Php OOP 2</h1>
    </header>

    <main>
        <div class="container">


        <?php
        include 'models/categoria.php';
        include 'models/tipologia.php';
        include 'models/prodotto.php';

        // prova 1 
        $categoria1 = new Categoria('Cane');
        $tipologia1 = new Tipologia('Gioco');
        echo "<div class='mt-4'>".paginaCategoria($categoria1)."</div>";
        echo "<div class='mt-4'>".paginaTipologia($tipologia1)."</div><hr>";

        // prova 2
        $categoria2 = new Categoria('Gatto');
        $tipologia2 = new Tipologia('Cibo');
        echo "<div class='mt-4'>".paginaCategoria($categoria2)."</div>";
        echo "<div class='mt-4'>".paginaTipologia($tipologia2)."</div><hr>";

        // prova 3
        $categoria3 = new Categoria('Roditore');
        $tipologia3 = new Tipologia('Medicale');
        echo "<div class='mt-4'>".paginaCategoria($categoria3)."</div>";
        echo "<div class='mt-4'>".paginaTipologia($tipologia3)."</div><hr>";

        ?>

        </div>
    </main>
</body>

</html>