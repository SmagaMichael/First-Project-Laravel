@extends('template/htmlGabarit')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item " > 
        <a href="{{ route('voir_tout_les_produits')}}">Tout les personnages</a>
      </li>

      @if ($Oneproduct->category->parent !== null)
        <li class="breadcrumb-item " > 
          <a href="{{ route('voir_produit_par_cat',['id' =>$Oneproduct->category->parent->id])}}">{{$Oneproduct->category->parent->nom}}</a>
        </li>
      @endif
     

      <li class="breadcrumb-item active" > 
        <a href="{{ route('voir_produit_par_cat',['id' =>$Oneproduct->category->id])}}">{{$Oneproduct->category->nom}}</a>
      </li>
    </ol>
</nav>

{{-- {{dd($Oneproduct)}} --}}
<div class="container">
  <div class="row">
    <img src="{{asset('img/personnage/'.$Oneproduct->photo_principal)}}" class="col-lg-9" alt="...">

    <div class="card col-lg-3" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$Oneproduct->nom}}</h5> 

        <p>
            <span class="badge bg-dark">
                <a href="{{route('voir_produit_par_cat', ['id'=>$Oneproduct->category->id])}}">
                    Type : {{$Oneproduct->category->nom}}
                </a>
            </span>
        </p>

        <p class="card-text">{{$Oneproduct->description}}</p>

        @foreach ($Oneproduct->tags as $tag)
            <p>
                <span class="badge bg-dark">
                    <a href="{{route('voir_produit_par_tag', ['id'=>$tag->id])}}">
                         {{$tag->nom}}
                    </a>
                </span>
            </p>
        @endforeach
       


        <p class="card-text">{{ number_format($Oneproduct->prix_ht,2)}}💎</p>
        {{-- a la place de l'url en dur : OneProduct/{{$produit->id}} on se sert de  l'alias  --}}
        {{-- <a href="OneProduct/{{$produit->id}}" class="btn btn-primary">Voir ce produit</a> --}}
        </div>
    </div>
  </div>
</div>

@if (count($Oneproduct->recommandations ) > 0)
    <div class="album py-5 bg-light">
      <div class="container">
          <div class="row">
              <h3>Vous aimerez aussi :</h3>
          </div>
          <div class="row">

            @foreach ($Oneproduct->recommandations as $produit_recommande)
              <div class="card col-5 col-lg-2 m-3" >
                  <div class="card mb-4 box-shadow">
                      <img src="{{asset('img/personnage/'.$produit_recommande->photo_avatar)}}" class="card-img-top img-fluid" alt="Responsive image">

                      <div class="card-body">
                        <h5 class="card-title">{{$produit_recommande->nom}}</h5>
                        <p>
                          <span class="badge bg-dark">
                              <a href="{{route('voir_produit_par_cat', ['id'=>$produit_recommande->category->id])}}">
                                  Type : {{$produit_recommande->category->nom}}
                              </a>
                          </span>
                      </p>
                          <div class="d-flex justify-content-end">
                              <div class="btn-group">
                                  <a href="{{route('voir_produit',['id'=>$produit_recommande->id])}}" class="btn btn-sm btn-outline-secondary">Voir ce produit</i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            @endforeach
              

          </div>
      </div>
    </div>
@endif


@endsection