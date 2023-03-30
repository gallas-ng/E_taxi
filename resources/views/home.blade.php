@extends('layouts.app')

@section('content')
<style>

    .presentation-img img{
        
        width: 100%;
        max-width: 400px;
        margin:auto;

    }
    #row-i i{
        size: 6px;
        color: #1acc8d;
    }
    #row-i span{
        color: #1acc8d;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-14">
        <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="presentation-img">
                        <img src="https://img.freepik.com/free-vector/taxi-app-interface-illustration_23-2148487606.jpg?w=740&t=st=1680064994~exp=1680065594~hmac=4bf7ec4ad9270a5c07f25553aeabb2c0d4d046207adfe1c069b9339ec71c1693" alt="Image de programmation">
                        </div>
                    </div>
                    <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: rgba(1, 4, 136, 0.9);color:white;">Bienvenue sur votre espace Passager</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="container">
                    <h2 class="text-center">Comment ça marche ?</h2>
                    <div id="row-i" class="row">
                        <div class="col-md-4 text-center">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-map "></i>
                        </span>
                        <h3>1</h3>
                        <p>Saisissez votre destination via géolocalisation puis validez le montant estimé de votre trajet. </p>
                        </div>
                        <div class="col-md-4 text-center">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-car "></i>
                        </span>
                        <h3>2</h3>
                        <p>Votre chauffeur vous récupère et vous dépose en toute sécurité à la destination indiquée.</p>
                        </div>
                        <div class="col-md-4 text-center">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-file-invoice-dollar "></i>
                        </span>
                        <h3>3</h3>
                        <p>Vous recevrez votre facture et pourrez noter votre trajet et votre chauffeur.</p>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


@endsection
