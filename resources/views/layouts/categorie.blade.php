@extends('template/htmlGabarit')

@section('content')
@include('template/navBarCategory')

<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
    
            @if (isset($category))
            
                @if ($category->parent_id !== null)
                    <li class="breadcrumb-item active" > 
                        <a href="{{ route('voir_produit_par_cat', ['id' =>$category->parent->id]) }}">
                            {{$category->parent->nom}}
                        </a>
                    </li>
                @endif
    
                <li class="breadcrumb-item active" >{{$category->nom}}</li>
    
                @foreach ($category->childrens as $children)
                <li class="breadcrumb-item active" >
                    <a href="{{ route('voir_produit_par_cat', ['id' =>$children->id]) }}">{{$children->nom}}</a>
                </li>
                @endforeach
    
            @else
                <li class="breadcrumb-item active" ><a href="{{route('voir_produit_par_tag',['id'=>$tag])}}">{{$tag->nom}}</a></li>
            @endif
    
        </ol>
    </nav>

</div>

@if ($category->id == 1)
    <div class=" categorie_anemo p20">  
@elseif ($category->id == 2)
    <div class=" categorie_cryo p20">  
@elseif ($category->id == 3)
    <div class=" categorie_hydro p20">  
@elseif ($category->id == 4)
    <div class=" categorie_geo p20">  
@elseif ($category->id == 5)
    <div class=" categorie_electro p20">  
@elseif ($category->id == 6)
    <div class=" categorie_pyro p20">  
@else
    <div>
@endif

    <div class="container categorie_white">

        {{-- {{dump($produits)}} --}}
        <div class="row">
    
        @foreach ($produits as $produit)
            <div class="card col-lg-2 m-3">
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
                {{-- <p class="card-text">{{ number_format($produit->prix_ht,2)}}</p> --}}
                {{-- a la place de l'url en dur : OneProduct/{{$produit->id}} on se sert de  l'alias  --}}
                {{-- <a href="OneProduct/{{$produit->id}}" class="btn btn-primary">Voir ce produit</a> --}}
                {{-- <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_anemo">Voir ce personnage</a> --}}
                

                @if ($category->id == 1)
                        <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_anemo">Voir ce personnage</a>
                    @elseif ($category->id == 2)
                        <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_cryo">Voir ce personnage</a>
                    @elseif ($category->id == 3)
                        <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_hydro">Voir ce personnage</a>
                    @elseif ($category->id == 4)
                        <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_geo">Voir ce personnage</a>
                    @elseif ($category->id == 5)
                        <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_electro">Voir ce personnage</a>
                    @elseif ($category->id == 6)
                        <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn categorie_pyro">Voir ce personnage</a>
                    @else
                    
                @endif







                </div>
            </div>
        @endforeach
    
        </div>
    
    </div>

</div>


@endsection