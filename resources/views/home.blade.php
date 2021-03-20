
    @include('layouts/header')
    
    
    <body>
        
        <h1>Hello Laravel</h1>
        <p>Il est {{ date('H\hi\m') }}</p>
        @yield('AllProduct')
        {{-- @include('layouts/showProduit') --}}
    </body>
</html>