
@extends('index')

@section('content')
<?php

    global $total;
if (empty(!$product)) {
foreach ($product as $produit) {

    $prodentry = DB::select("SELECT * FROM produit WHERE " . $produit->produit_id . " = id");

    foreach ($prodentry as $prod) {
        $total = ($total + $prod->prix);
        echo "<div class=\"shoppingline\">
        <div class='card-group' style='margin: 10px;padding: 10px; width: 700px; margin-left: 350px;'>
  <div class='card' style='margin: 10px;'>
    <div class='game-pic'>
        <div class=\"lineitem\" '> <img style=\"width:310px;height:250px; display: inline-block;\" src=\"/" . $prod->pathImage . "\"></div>
        <div class='#' style='margin-left: 400px; margin-top: -180px; margin-bottom: 140px; height:150px;  font-size: 25px;'>
        <p class=\"lineitem\">" . $prod->nom . "</p>
        <p class=\"lineitem\">" . $prod->couleur . "</p>
        <p class=\"lineitem\">" . $prod->description . "</p>
        <p class=\"lineitem\"> " . $prod->prix . " € TTC</p>

<<<<<<< HEAD
        <a class=\"lineitem\" href=\"/produitdel/?id=" . $prod->id . "\" style='color: red; border-radius: 5px; text-decoration:none'> Suprimer </a></div>
=======
        <a class=\"lineitem\" href=\"/produitdel/" . $produit->id . "\" style='color: red; border-radius: 5px; text-decoration:none'> Suprimer </a></div>
>>>>>>> panier-ajout
        </div>
        </div>
        </div>";
    }
}
    echo "<div class='card-group' style='width: 350px; padding: 10px; color: black; background-color: white;  margin-left: 685px;'> <h1> Prix Total : $total €</h1></div>
<a href='/' style='text-decoration: none;'> <p style='width: 350px; padding: 10px; color: black; background-color: white;  margin-left: 685px; text-align: right;
font-size: 2em;'>Valider</p></a>";


} else {
    echo" <br> <br><div class='card-group' style='width: 450px; padding: 10px; border-radius: 10px;
color: black; background-color: white;  margin-left: 485px;'>
<h2 style='margin-left: 55px; margin-top: 20px;'> Votre panier est vide !</h2>
<br>
<br>

        <a href='/' style='text-decoration: none;'><p style=' color: black; margin-left: 250px; margin-top: 50px;'>Contunier vos Achat</p></a>



<br> <br><br></div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>";


}




?>

@endsection
