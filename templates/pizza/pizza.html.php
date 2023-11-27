


<div class="container d-flex flex-row">
    <img src="<?= $pizza['image']?>" class="imgPageProduit" alt="">
    <div>
        <h5 class="card-title"><?= $pizza['nom']?></h5>
        <h5 class="card-title"><?= $pizza['prix']?></h5>
        <p class="card-text">Composition : <?= $pizza['composition']?></p>
        <a href="fichePizza.php"><button class="btn btn-primary">REtour</button></a>

    </div>
</div>