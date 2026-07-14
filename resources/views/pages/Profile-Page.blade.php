@extends('layout.app')
@section('title', 'Profile & Order')
@section('contant')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profle-tab-pane" type="button" role="tab" aria-controls="profle-tab-pane" aria-selected="true">Profle</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#orders-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Orders</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profle-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        @include('components.profile')
                    </div>
                    <div class="tab-pane fade" id="orders-tab-pane" role="tabpanel" aria-labelledby="orders-tab" tabindex="0">
                        @include('components.orders')
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
    <script>
        (async ()=>{
            await Category();
            ProfileDetails();
            ProfileCreate();
            OrderListRequest();
            InvoiceProductList(id);
            $(".preloader").delay(400).fadeOut(400).addClass('loaded');
        })()
    </script>
@endsection