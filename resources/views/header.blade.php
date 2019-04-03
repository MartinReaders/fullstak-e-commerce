<?php
//require '_header.php'
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-SPORT</title>
    <link href="{{ URL ::asset('css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/olimpycs_17_icon-icons.com_68623.ico">
</head>

<body>
<!-- header -->

<section class="header">
    <header><a class="logo" href="/"><img src="img/bitcoin.png" alt="">E-Sport</a>
        <div class="search">
            <input class="search__text" type="text"/>
            <button class="search__button">
                <div class="search-icon"></div>
            </button>
        </div>
        <div class="info"><div class="cour"><img src="img/like.png" alt="" class="like"></div><a href="">Liste de souhaits</a><a href="/">Livraison&nbsp;et&nbsp;Paiement</a><a href="/">Nous contacter</a><a href="#"><!-- Button trigger modal -->



                <?php if( isset($_SESSION['logged'])) : ?>
                <span style="color: green;font-weight:bold">Accès !</span> <br>
                Bonjour, <?php echo $_SESSION['logged']->login; ?> !
                <hr>

                <button style="background-color: #007bff;border-radius: 5px;border-color:#007bff; "><a href="logout"  style="padding-right:10px;">EXIT</a></button>
                <?php else : ?>
                <span style="color:red">Vous n'êtes pas connecté!</span><hr>
                <button style="background-color: #007bff;border-radius: 5px;border-color:#007bff; text-align: center;"><a href="login" style="padding-right:10px;">SE CONNECTER</a></button>
                <button style="background-color: #007bff;border-radius: 5px;border-color:#007bff; "><a href="register">INSCRIPTION</a></button>
            <?php endif; ?>






        </div>
        </div>
        </div></a></div><a class="cart" href="panier">
            <div class="cart-icon">1</div></a>
        <!-- header -->




    </header>
</section>
<!-- nav-bar1 -->
<section class="nav">
    <nav>
        <div class="nav col-12 flex1"><a href="/"><span>Homme</span></a><a href=""><span>Femme</span></a><a href="/"> <span>Enfant</span></a><a href="/"> <span>Marques</span></a><a href="/"> <span>Sports</span></a><a href="/"> <span>Football</span></a><a href="/"> <span>Accsessoires</span></a><a href="/"> <span>MMA-Arts martiaux mixtes</span></a><a href="/"> <span>Plein air</span></a><a href="/"> <span>Course</span></a></div>
    </nav>

</section>
<!-- nav-bar1 -->


<!-- les buttons scroll tier-->

<div class="fltr_cont">
    <div class="slct-drpdwn">
        <label for="options" id="fltr_lbl">Trier par</label>
        <select name='options' id="fltr_optns">
            <option value='option-1'>Populaire</option>
            <option value='option-2'>Récent</option>
            <option value='option-3'>Vérifié</option>
        </select>
    </div>

    <div class="slct-drpdwn">
        <label for="options" id="fltr_lbl">Genre</label>
        <select name='options' id="fltr_optns">
            <option value='option-1'>Tous les genres
            </option>
            <option value='option-2'>Option 2</option>
            <option value='option-3'>Option 3</option>
            <option value='option-1'>Option 1</option>
            <option value='option-2'>Option 2</option>
            <option value='option-3'>Option 3</option>
            <option value='option-1'>Option 1</option>
            <option value='option-2'>Option 2</option>
            <option value='option-3'>Option 3</option>
            <option value='option-1'>Option 1</option>
            <option value='option-2'>Option 2</option>
            <option value='option-3'>Option 3</option>
        </select>
    </div>

    <div class="slct-drpdwn">
        <label for="options" id="fltr_lbl">location</label>
        <select name='options' id="fltr_optns">
            <option value="Brooklyn">Saint-Étienne</option>
            <option value="Manhattan">Lyon</option>
            <option value="Queens">Paris</option>
        </select>
    </div>

</div>
<!-- les buttons scroll tier-->

