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
                        <img src="https://img.freepik.com/free-vector/transport-service-taxi-app-concept_23-2148493912.jpg?w=740&t=st=1680108381~exp=1680108981~hmac=18de3945c9306471fb4aeca5b9b3e2b0b3f1c0c53a3cf5b98511b357f0836117" alt="Image de programmation">
                        </div>
                    </div>
                    <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: rgba(1, 4, 136, 0.9);color:white;">Bienvenue sur votre espace Chauffeur</div>

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
                            <i class="fas fa-phone "></i>
                        </span>
                        <h3>1</h3>
                        <p>Inscrivez-vous via notre plateforme. Une fois votre dossier validé, vous recevrez vos identifiants. </p>
                        </div>
                        <div class="col-md-4 text-center">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-file-invoice-dollar "></i>
                        </span>
                        <h3>2</h3>
                        <p>Rejoignez-nous et augmentez vos revenus tout en gérant votre emploi du temps simplement.</p>
                        </div>
                        <div class="col-md-4 text-center">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-taxi "></i>
                        </span>
                        <h3>3</h3>
                        <p>Vous êtes prêt à prendre vos nouvelles fonctions</p>
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
