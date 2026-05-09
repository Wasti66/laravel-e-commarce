@extends('layout.app')
@section('title','Category List')
@section('contant')
    @include('components.ByBrandsList')
   
    @include('components.footer')
    <script>
        (async ()=>{
            await Category();
            $(".preloader").delay(400).fadeOut(400).addClass('loaded');
            ByBrand();
        })()
    </script>
@endsection
