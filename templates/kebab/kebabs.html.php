
<div class="row">

    <?php foreach ($kebabs as $kebab) : ?>
    <div class="card col-3">
        <img src="<?= $kebab['image'] ?>" class="card-img-top imageCard" alt="pizzaIMAGE" style="    height: 241px;
    width: 100%;">
        <div class="card-body">
            <h5 class="card-title"><?= $kebab['nom'] ?></h5>
            <h5 class="card-title"><?= $kebab['prix'] ?></h5>
            <p class="card-text">Composition : <?= $kebab['composition'] ?></p>
            <form action="ficheKebab.php" method="get">
                <input type="hidden" name="kebabId" value="<?= $kebab['id'] ?>">
                <button class="btn btn-primary">Ca t'intéresse ?</button>
            </form>

        </div>
    </div>
    <?php endforeach; ?>
</div>

