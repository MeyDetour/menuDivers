


<div class="container d-flex flex-row">
    <img src="<?= $sushi['image']?>" class="imgPageProduit" alt="">
    <div>
        <h5 class="card-title"><?= $sushi['nom']?></h5>
        <h5 class="card-title"><?= $sushi['prix']?></h5>
        <p class="card-text">Composition : <?= $sushi['composition']?></p>
        <a href="ficheSushi.php"><button class="btn btn-primary">Retour</button></a>

    </div>
</div>