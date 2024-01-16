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

        $prodotti = [
            new Prodotto('Pallina rimbalzina', 12.99, 'Cane', 'Gioco'),
            new Prodotto('Croccantini Gourmet', 6.99, 'Gatto', 'Cibo'),
            new Prodotto('Petmod Intestinal 60 Gr', 24.99, 'Roditore', 'Medicale'),
        ];
        ?>

        <div class="row">
            <?php foreach ($prodotti as $prodotto): ?>
                <div class="col-md-4">
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Nome: <?= $prodotto->nome ?></h5>
                            <p class="card-text">Prezzo: <?= $prodotto->prezzo ?></p>
                            <p class="card-text">Categoria: <?= $prodotto->tipo ?></p>
                            <p class="card-text">Sconto Categoria: <?= $prodotto->sconto ?></p>
                            <p class="card-text">Tipologia: <?= $prodotto->titolo ?></p>
                            <p class="card-text">Sconto Tipologia: <?= $prodotto->scontoTipologia ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        </div>
    </main>
</body>

</html>