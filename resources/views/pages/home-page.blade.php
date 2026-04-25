@extends('layout.app')
@section('title', 'Home')
@section('contant')
    @include('components.home-banar')
    @include('components.sub-banar')
    @include('components.topCategory')
    @include('components.exclusive-Products')
    @include('components.footer')
@endsection