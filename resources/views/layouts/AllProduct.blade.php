@extends('template/htmlGabarit')

@section('content')
@include('template/navBarCategory')



    <div class="container">
        {{-- {{dump($produits)}} --}}
        <div class="row">

        @foreach ($produits as $produit)
            <div class="card col-lg-3 m-3" style="width: 18rem;">
                <img src="{{asset('img/personnage/'.$produit->photo_avatar)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$produit->nom}}</h5>
                <p class="card-text">{{$produit->description}}</p>
                <p class="card-text">{{ number_format($produit->prix_ht,2)}}</p>
                {{-- a la place de l'url en dur : OneProduct/{{$produit->id}} on se sert de  l'alias  --}}
                {{-- <a href="OneProduct/{{$produit->id}}" class="btn btn-primary">Voir ce produit</a> --}}
                <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-primary">Voir ce produit</a>
                </div>
            </div>
        @endforeach

        </div>

    </div>

@endsection