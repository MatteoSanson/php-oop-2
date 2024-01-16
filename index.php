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


        echo "<div class='mt-4'>".paginaCategoria()."</div>";
        echo "<div class='mt-4'>".paginaTipologia()."</div>";
        echo "<div class='mt-4'>".paginaProdotto()."</div>";
        ?>

        </div>
    </main>
</body>

</html>