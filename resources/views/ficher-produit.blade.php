<link href="{{ URL ::asset('css/style-ficheproduit.css') }}" rel="stylesheet">

<header>
    @include('header')
</header>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<body>
<?php
$DB= new PDO('mysql:host=localhost;dbname=fullstack-e-commerce', 'root', 'Readers11!');
$produit = $DB->prepare("SELECT * FROM produit where id = $_GET[id] ");
if ($produit->execute(array())) {
    while ($row = $produit->fetch()) {?>

<div id="wrap">
    <div id="product_layout_1">
        <div class="top">
            <div class="product_images">
                <div class="product_image_1">
                    <img src="<?php echo $row['pathImage']?>"/>
                </div>

            </div>
            <div class="product_info">
                <h1><?php echo $row['nom']; ?></h1>
                <div class="price">

                    <h2 class="sale_price"><?php echo number_format($row['prix'],2); ?> $ <br> <?php echo $row['couleur']; ?></h2>
                </div>

                <div class="product_description">
                <p><?php echo $row['description'];?></p>
                </div>

                    <div class="buying">
                        <div class="quantity">
                            <label for="quantity">QTY:</label>
                            <input type="text">
                        </div>
                        <div class="cart">
                            <a href="#" class="add">Add to Cart <i class="fa fa-shopping-cart fa-lg"></i></a>

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
