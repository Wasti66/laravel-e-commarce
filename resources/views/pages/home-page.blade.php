@extends('layout.app')
@section('title', 'Home')
@section('contant')
    @include('components.home-banar')
    @include('components.sub-banar')
    @include('components.topCategory')
    @include('components.exclusive-Products')
    @include('components.TopBrands')
    @include('components.footer')
    <script>
        (async ()=>{
            await Category();
            await Banar();
            $(".preloader").delay(400).fadeOut(400).addClass('loaded');
            TopCatagories();
            Top();
            Popular();
            New();
            Special();
            Trending();
            Regular();
        })()
    </script>
@endsection