<div class="row">

    <?php foreach ($sushis as $sushi) : ?>
        <div class="card col-3">
            <img src="<?= $sushi['image'] ?>" class="card-img-top imageCard" alt="pizzaIMAGE" style="    height: 241px;
    width: 100%;">
            <div class="card-body">
                <h5 class="card-title"><?= $sushi['nom'] ?></h5>
                <h5 class="card-title"><?= $sushi['prix'] ?></h5>
                <p class="card-text">Composition : <?= $sushi['composition'] ?></p>
                <form action="ficheSushi.php" method="get">
                    <input type="hidden" name="sushiId" value="<?= $sushi['id'] ?>">
                    <button class="btn btn-primary">Ca t'intéresse ?</button>
                </form>

            </div>
        </div>
    <?php endforeach; ?>
</div>
