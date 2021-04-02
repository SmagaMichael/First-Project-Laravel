<div class="container">
    <ul class="row">
        @foreach ($categories as $category)
        <li class="nav-item col-lg-1">
            <a class="nav-link" href="{{route('voir_produit_par_cat', ['id'=>$category->id])}}">{{$category->nom}}</a>
        </li>
        @endforeach
    </ul>
</div>