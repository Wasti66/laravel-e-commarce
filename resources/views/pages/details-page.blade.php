@extends('layout.app')
@section('title', 'Product Details')
@section('contant')
    @include('components.ProductsDetails')
    @include('components.TopBrands')
    @include('components.productSpeafiation')
    @include('components.footer')
    <script>
        (async ()=>{
                productDetails();
                Category();
                productReview();
                $(".preloader").delay(400).fadeOut(400).addClass('loaded');
            })()
    </script>
@endsection
