@extends('template/htmlGabarit')

@section('content')


{{-- {{dd($Oneproduct)}} --}}
<div class="container">


    <div class="card col-lg-3" style="width: 18rem;">
        <img src="{{asset('img/personnage/'.$Oneproduct->photo_principal)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$Oneproduct->nom}}</h5>
        <p class="card-text">{{$Oneproduct->description}}</p>
        <p class="card-text">{{ number_format($Oneproduct->prix_ht,2)}}</p>
        {{-- a la place de l'url en dur : OneProduct/{{$produit->id}} on se sert de  l'alias  --}}
        {{-- <a href="OneProduct/{{$produit->id}}" class="btn btn-primary">Voir ce produit</a> --}}
        </div>
    </div>
</div>

@endsection