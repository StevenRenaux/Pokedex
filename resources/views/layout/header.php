<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= url('css/reset.css') ?>">
    <link rel="stylesheet" href="<?= url('css/style.css') ?>">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

    <?php if(isset($title)): ?>
    <title>Pokedex | <?= $title ?> </title>
    <?php else : ?>
    <title>Pokedex | Erreur 404 </title>
    <?php endif ?>

  </head>
  <body>

  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand nav-link-color" href="<?= route('main-home') ?>">Pokédex</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active text-center">
                        <a class="nav-link nav-link-color" href="<?= route('main-home') ?>">Liste <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link nav-link-color" href="<?= route('type-list') ?>">Types</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
