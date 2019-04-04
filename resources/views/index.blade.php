<!DOCTYPE html>
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

            @auth
                <button style="background-color: #00d8d6;border-radius: 5px;border-color:#00d8d6; text-align: center;"><a href="logout" style="padding-right:10px;">Deconnextion</a></button>
                <button style="background-color: #00d8d6;border-radius: 5px;border-color:#00d8d6; "><a href="register">Mon compte</a></button>
                 <p style="color:green;">Bonjour {{ Auth::user()->name }} </p>
        </div>
        </div>
        </div></a></div><a class="cart" href="card.html">
            <div class="cart-icon">1</div></a>
            @endauth @guest
                <button style="background-color: #00d8d6;border-radius: 5px;border-color:#00d8d6; text-align: center;"><a href="login" style="padding-right:10px;">SE CONNECTER</a></button>
                <button style="background-color: #00d8d6;border-radius: 5px;border-color:#00d8d6;"><a href="register">INSCRIPTION</a></button>
        <p style="color:red;">Vous n'etes pas connecter</p>
         </div>

            @endguest





    </header>
</section>
<!-- nav-bar1 -->
<section class="nav">
    <nav>
        <div class="nav col-12 flex1"><a href="/"><span>Homme</span></a><a href="/femme"><span>Femme</span></a><a href="/"> <span>Enfant</span></a><a href="/"> <span>Marques</span></a><a href="/"> <span>Sports</span></a><a href="/"> <span>Football</span></a><a href="/"> <span>Accsessoires</span></a><a href="/"> <span>MMA-Arts martiaux mixtes</span></a><a href="/"> <span>Plein air</span></a><a href="/"> <span>Course</span></a></div>
    </nav>

</section>
<!-- nav-bar1 -->


<!-- les buttons scroll tier-->

<div class="fltr_cont">
    <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="femme">T-shirt</a>
            <a class="dropdown-item" href="#">Short</a>
            <a class="dropdown-item" href="#">Sac</a>

        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="femme">T-shirt</a>
            <a class="dropdown-item" href="#">Short</a>
            <a class="dropdown-item" href="#">Sac</a>

        </div>
    </div>
</div>
<!-- les buttons scroll tier-->





@yield('content')




<link href="{{ URL ::asset('css/style.css') }}" rel="stylesheet">

<!-- buttons NEXT et Derier-->
<div class="button-bar">
    <a href="#" class="button prev">Previous</a>
    <a href="#" class="button next">Next</a>
</div>
<!-- buttons NEXT et Derier-->

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div  class="footer-copyright text-center py-3">© 2018 Copyright:
        Alpha Baldé & Martin Khanpherian
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->




<script type="text/javascript" src="js/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>




