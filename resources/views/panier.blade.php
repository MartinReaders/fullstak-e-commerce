
@extends('index')

@section('content')
<?php

foreach ($product as $produit) {

    $prodentry = DB::select("SELECT * FROM produit WHERE " . $produit->produit_id . " = id");

    foreach ($prodentry as $prod) {
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

        <a class=\"lineitem\" href=\"/produitdel/" . $produit->id . "\" style='color: red; border-radius: 5px; text-decoration:none'> Suprimer </a></div>
        </div>
        </div>
        </div>";
    }

}



?>

@endsection
