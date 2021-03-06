@extends('template/htmlGabarit')

@section('content')
@include('template/navBarCategory')


<div class=" bgAllProduct">
    <div class="container">
        {{-- {{dump($produits)}} --}}
        <div class="row">

        @foreach ($produits as $produit)
            <div class="card col-5 col-lg-2 m-3" >
                <img src="{{asset('img/personnage/'.$produit->photo_avatar)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$produit->nom}}</h5>
                <p class="card-text">{{$produit->description}}</p>

                <p>
                    <span class="badge bg-dark">
                        <a href="{{route('voir_produit_par_cat', ['id'=>$produit->category->id])}}">
                            Type : {{$produit->category->nom}}
                        </a>
                    </span>
                </p>

                <p class="card-text">{{ number_format($produit->prix_ht,2)}}💎</p>
                {{-- a la place de l'url en dur : OneProduct/{{$produit->id}} on se sert de  l'alias  --}}
                {{-- <a href="OneProduct/{{$produit->id}}" class="btn btn-primary">Voir ce produit</a> --}}
                <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-primary">Voir ce personnage</a>
                </div>
            </div>
        @endforeach

        </div>

    </div>
</div>
@endsection