<div class="container d-flex flex-row">
    <img src="<?= $kebab['image'] ?>" class="imgPageProduit" alt="">
    <div>
        <h5 class="card-title"><?= $kebab['nom'] ?></h5>
        <h5 class="card-title"><?= $kebab['prix'] ?></h5>
        <p class="card-text">Composition : <?= $kebab['composition'] ?></p>
        <a href="ficheKebab.php">
            <button class="btn btn-primary">REtour</button>
        </a>

    </div>
</div>