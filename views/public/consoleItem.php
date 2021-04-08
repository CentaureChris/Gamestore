<?php ob_start();
require_once('./views/public/templatePublic.php');

?>

<div class="container mt-5">
<div class="row">
  <div class="col-6">
    <div class="card mb-3" >
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./assets/images/<?=$image;?>" alt="..." width="300px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-end"><?=$marque;?>-<?=$modele;?></h5>
            <p class="card-text text-end text-danger">Prix: <?=$prix;?> €</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-3">
  <h4 class="text-center">Validation</h4>
    <form>
      <label for="email" class="text-white">Email*</label>
      <input type="email"id="email" class="form-control" placeholder="Votre email svp...">
      <label for="quant" class="text-white">Quantite*</label>
      <input type="number" id="quant" class="form-control" min="1" value="1"  max="<?= $nb;?>">
      <input type="hidden" id="ref" value="<?=$id;?>">
      <input type="hidden" id="modele" value="<?=$modele;?>">
      <input type="hidden" id="marque" value="<?= $marque;?>">
      <input type="hidden" id="prix" value="<?= $prix;?>">
      <input type="hidden" id="nb" value="<?= $nb;?>">


      <button id="checkout-button" class="btn btn-success col-12 mt-2" >Valider</button>
    </form>
  </div>
</div>
</div>
<?php 
    // $contenu = ob_get_clean();
?>