

<header>
@include('header')
</header>



<?php
$DB= new PDO('mysql:host=localhost;dbname=fullstack-e-commerce', 'root', 'Readers11!');
$produit = $DB->prepare("SELECT * FROM produit");
if ($produit->execute(array())) {
  while ($row = $produit->fetch()) {?>
    <div class="card-group" style="margin: 10px;padding: 10px; width: 400px; display: inline-block;">
  <div class="card" style="margin: 10px;">
    <div class="game-pic">
  <img src="<?php echo $row['pathImage']?>" style="border-radius: 5px; margin: 5px 5px;">
        <div class="game-card-overlay">
          <div class="overlay-button" id="overlay-double">
                <a href="panier.php?id=<?php echo $row['id']?>"><p>Ajouter au panier</p></a>
          </div>
            <div class="overlay-button" id="overlay-double">
              <a href="ficher-produit.php?id=<?php echo $row['id']?>">
          <p>Fiche produit</p></a></div>
        </div>
      </div>


      <div class="card-body">
      <h5 class="card-title"><?php echo $row['nom']; ?></h5>
      <p class="card-text"><span style="color: red"><?php echo number_format($row['prix'],2); ?> $ <?php echo $row['couleur']; ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Tailles : S, M, L, XL, 2 XL</small>
    </div>
    </div>
  </div>
    <?php
  }
}
?>

<footer>
    @include('footer')
</footer>

