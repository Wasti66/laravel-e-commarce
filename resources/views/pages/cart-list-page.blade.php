@extends('layout.app')
@section('title', 'Cart')
@section('contant')
    @include('components.CartList')
    @include('components.PaymentMethodModel')
    @include('components.footer')
    <script>
        (async ()=>{
            await Category();
            CartList();
            $(".preloader").delay(400).fadeOut(400).addClass('loaded');
        })()
    </script>
@endsection