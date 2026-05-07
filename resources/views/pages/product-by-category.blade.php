@extends('layout.app')
@section('title','Category List')
@section('contant')
    @include('components.ByCategoryList')
    @include('components.TopBrands')
    @include('components.footer')
    <script>
        (async ()=>{
            await Category();
            ByCategory();
            $(".preloader").delay(400).fadeOut(400).addClass('loaded');
        })()
    </script>
@endsection
