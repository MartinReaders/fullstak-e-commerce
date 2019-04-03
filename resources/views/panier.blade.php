<header>
    @include('header')
</header>

<?php

foreach ($product as $produit) {
    $prodentry = DB::select("SELECT * FROM produit WHERE " . $produit->produit_id . " = id");
    foreach ($prodentry as $prod) {
        echo "<div class=\"shoppingline\">
        <div class='card-group' style='margin: 10px;padding: 10px; width: 700px;'>
  <div class='card' style='margin: 10px;'>
    <div class='game-pic'>
        <div class=\"lineitem\" '> <img style=\"width:310px;height:250px; display: inline-block;\" src=\"/" . $prod->pathImage . "\"></div>
        <div class='#' style='margin-left: 450px; margin-top: -150px; height:150px;  font-size: 25px;'>
        <p class=\"lineitem\"> " . $prod->marque_id . " - " . $prod->nom . "</p>
        <p class=\"lineitem\"> " . $prod->prix . " € TTC</p>
        <a class=\"lineitem\" href=\"produitdel?id=" . $prod->id . "\" style='color: #000;'> Suprimer </a></div>
        </div>
        </div>
        </div>";
    }

}



?>


<footer>
    @include('footer')
</footer>
