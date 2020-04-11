<?php include __DIR__.'/../layout/header.php'; ?>

<h1 class="page_title">Détails de <?= $pokemon->nom ?></h1>
    <div class="container_flex">
        <div class="card_picture_details">
            <img src="<?= url('/img') . '/' . $pokemon->numero ?>.png" class="card-img-top" alt="<?= $pokemon->nom ?>">
        </div>

        <div class="card_details">
            <h2 class="card_details-title">#<?= $pokemon->numero ?> <?= $pokemon->nom ?></h2>
                <?php  foreach($type as $currentType) : ?>
                <div class="badge" style="background-color: #<?= $currentType->color ?>">
                    <p class="badge_type"><?= $currentType->name ?></p>
                </div>
                <?php endforeach ?>
            <h3 class="card_details-title"> Statistiques</h3>
            <ul class="container_card_details">
                <div class=" card_details-statistics card_details-list"><li>PV</li></div>
                <div class=" card_details-statistics card_details-value"><p><?= $pokemon->pv ?></p></div>
                <div class=" card_details-statistics progress">
                    <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->pv ?>*100%/255)" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class=" card_details-statistics card_details-list"><li>Attaque</li></div>
                <div class=" card_details-statistics card_details-value"><p><?= $pokemon->attaque ?></p></div>
                <div class=" card_details-statistics progress">
                    <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->attaque ?>*100%/255)" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class=" card_details-statistics card_details-list"><li>Défense</li></div>
                <div class=" card_details-statistics card_details-value"><p><?= $pokemon->defense ?></p></div>
                <div class=" card_details-statistics progress">
                    <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->defense ?>*100%/255)" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class=" card_details-statistics card_details-list"><li>Attaque Spé.</li></div>
                <div class=" card_details-statistics card_details-value"><p><?= $pokemon->attaque_spe ?></p></div>
                <div class=" card_details-statistics progress">
                    <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->attaque_spe ?>*100%/255)" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class=" card_details-statistics card_details-list"><li>Défense Spé.</li></div>
                <div class=" card_details-statistics card_details-value"><p><?= $pokemon->defense_spe ?></p></div>
                <div class=" card_details-statistics progress">
                    <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->defense_spe ?>*100%/255)" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class=" card_details-statistics card_details-list"><li>Vitesse</li></div>
                <div class=" card_details-statistics card_details-value"><p><?= $pokemon->vitesse ?></p></div>
                <div class=" card_details-statistics progress">
                    <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemon->vitesse ?>*100%/255)" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </ul>
        </div>
        <nav class="details_nav"><li class="details_nav_list"><a class="details_nav_list--item" href="<?= route('main-home') ?>">Revenir à la liste</a></li></nav>
    </div>

<?php include __DIR__.'/../layout/footer.php'; ?>
