
<div class="container">
    <ul class="d-flex flex-wrap justify-content-center ">
        @foreach ($categories as $category)
        <li class="list-group-item col-lg-1 m-2">
            <a class="nav-link" href="{{route('voir_produit_par_cat', ['id'=>$category->id])}}">{{$category->nom}}</a>
        </li>
        @endforeach
    </ul>         
</div>

