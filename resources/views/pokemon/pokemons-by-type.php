<?php include __DIR__.'/../layout/header.php'; ?>

<div class="container_flex">
    <?php foreach($allPokemon as $currentPokemon) :?>
        <a href="<?= route('pokemon-details' , ['id' => $currentPokemon->numero]) ?>" alt="<?= $currentPokemon->nom ?>">
            <div class="card">
                <img src="<?= url('/img') . '/' . $currentPokemon->numero ?>.png" class="card-img-top" alt="<?= $currentPokemon->nom ?>">
                <div class="card-body">
                    <h5 class="card-title">#<?= $currentPokemon->numero ?> <?= $currentPokemon->nom ?></h5>
                </div>
            </div>
        </a>
    <?php endforeach ?>

    <?php if(empty($currentPokemon)): ?>
        <p>Va falloir appeler Sasha, pas de Pokemons de ce type dans le pokedex actuellement.</p>
    <?php endif ?>
</div>

<?php include __DIR__.'/../layout/footer.php'; ?>
