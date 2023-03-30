@extends('layouts.app')
  
@section('content')
<style>
.presentation-img img{
        
        width: 100%;
        max-width: 400px;
        margin:auto;

    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Votre espace administrateur</div>
  
                <div class="card-body align-items-center">
                    <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="presentation-img">
                        <img src="https://img.freepik.com/free-vector/man-look-graphic-chart-business-analytics-concept-big-data-processing-icon_39422-761.jpg?w=740&t=st=1680141357~exp=1680141957~hmac=195af67d1531a1f24fd7510e6246e91eed27c1827dce2b93299bfb1df9159fbb" alt="Image de programmation">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-people" style="size:12px"></i>
                        <h4 > Suivie totale sur l'evolution de votre plateforme TAXIMAN</h4>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection