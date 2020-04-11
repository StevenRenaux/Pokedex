<?php include __DIR__.'/../layout/header.php'; ?>

<p>Cliquez sur un type pour voir tous les Pokémons de ce type</p>

<div class="container_type_list">
    <?php foreach($allTypes as $currentType) : ?>
        <a href="<?= route('pokemon-by-type' , ['id' => $currentType->id])  ?>" class="badge_type_list" style="background-color: #<?= $currentType->color ?>"><?= $currentType->name ?></a>
    <?php endforeach ?>
</div>

<?php include __DIR__.'/../layout/footer.php'; ?>
