@extends('home')
@section('AllProduct')
    
    {{-- coucou --}}
    <div class="container">
        {{-- {{dump($produits)}} --}}
        <div class="row">

        @foreach ($produits as $produit)
            <div class="card col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/'.$produit->photo_principal)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$produit->nom}}</h5>
                <p class="card-text">{{$produit->description}}</p>
                <p class="card-text">{{$produit->prix_ht}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach

        </div>

    </div>

@endsection