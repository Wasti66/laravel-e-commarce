@extends('layout.app')
@section('title', 'Home')
@section('contant')
    @include('components.policyList')
    @include('components.footer')
    <script>
        (async ()=>{
            await Category();
            $(".preloader").delay(400).fadeOut(400).addClass('loaded');
            await PolicyList();
        })()
    </script>
@endsection