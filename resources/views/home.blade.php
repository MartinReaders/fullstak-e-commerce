<<<<<<< HEAD
@extends('index')
=======


@extends('layouts.app')



>>>>>>> version-final-page-dinsrtiption
@section('content')
    <br>
    <br>

<div class="container">

    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    Tableau de bord</div>
    <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Vous êtes Connecter!
                </div>

                <div class="#" style="text-align: center;">
                    <a href="/"><h2 style=" color: black;">Contunier vos Achat</h2></a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
=======

>>>>>>> version-final-page-dinsrtiption
@endsection
