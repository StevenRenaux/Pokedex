<?php include __DIR__.'/../layout/header.php'; ?>

<h1>Erreur 404 dans le Pokedek</h1>

<img src="<?= url('/img/poke_b10.png')?>" alt="intèrieur Pokeball" class="picture404">

<nav class="details_nav"><li class="details_nav_list"><a class="details_nav_list--item" href="<?= route('main-home') ?>">Revenir à la liste</a></li></nav>


<?php include __DIR__.'/../layout/footer.php'; ?>
