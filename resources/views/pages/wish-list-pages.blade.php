@extends('layout.app')
@section('title', 'Home')
@section('contant')
    @include('components.wishList')
    @include('components.footer')
    <script>
        (async () => {
            await WishList();
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
            await Category();
        })()
    </script>
@endsection