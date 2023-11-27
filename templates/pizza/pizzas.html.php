<div class="row">

    <?php foreach ($pizzas as $pizza): ?>


            <div class="card col-3">
                <img src="<?= $pizza['image'] ?>" class="card-img-top imageCard" alt="pizzaIMAGE" style="    height: 241px;
    width: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><?= $pizza['nom'] ?></h5>
                    <h5 class="card-title"><?= $pizza['prix'] ?></h5>
                    <p class="card-text">Composition : <?= $pizza['composition'] ?></p>
                    <form action="fichePizza.php" method="get">
                        <input type="hidden" name="pizzaID" value="<?= $pizza['id'] ?>">
                        <button class="btn btn-primary">Ca t'intéresse ?</button>
                    </form>

                </div>
            </div>

    <?php endforeach; ?>

</div>