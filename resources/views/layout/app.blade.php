<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- title -->
        <title>
            E-commerce | @yield('title') 
        </title>
        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- style.css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- swiper-bundle.min.css -->
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <!--fontaewsome -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <!-- wow animate.min.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <!-- jquery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script> 
        <!-- axios -->
        <script src="{{ asset('js/axios.min.js') }}"></script>
    </head>
    <body>
        <div id="preloader" class="loader position-fixed z-3 d-flex align-items-center justify-content-center top-0 start-0 vh-100 w-100" style="background-color: #dee2e6e0;">
            <div class="custom-spinner"></div>
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <!-- header -->
         <header>
            <section class="py-3">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- side one-->
                        <div class="d-flex align-items-center">
                            <!-- phone -->
                            <div class="d-flex align-items-center">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-body" height="20px" width="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                                <p class="text-body mb-0 fw-medium ms-1">+8801968618766</p>
                            </div> 
                            <!-- email -->
                            <div class="ms-4 d-flex align-items-center">
                               <svg 
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-body" height="20px" width="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                               <p class="text-body mb-0 fw-medium ms-2">08wasti@gmail.com</p>
                            </div>    
                        </div>

                        <!-- side two-->
                        <div class="d-flex align-items-center">
                            <!--about link -->
                            <a href="#about" class="text-body fw-medium nav-link">About</a>
                            <a href="#about" class="text-body fw-medium nav-link ms-2">Contact</a>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0">
            <nav class="navbar navbar-expand-lg py-4">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <ul class="navbar-nav">
                            <!-- home -->
                            <li class="nav-item">
                                <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Home</a>
                            </li>
                            <!-- about -->
                            <li class="nav-item">
                                <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">About</a>
                            </li>
                            <!-- product -->
                            <li class="nav-item hover-dropdown hover-dropdown-100">
                                <a class="text-body fw-medium nav-link transition transition-hover hover-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                                <div class="dropdown-menu end-0 border-0 p-0 mt-0 bg-transparent dropdown-menu-hover">
                                    <div class="container bg-white border mx-auto w-lg-75 p-3 border rounded-lg-0 rounded responsve-dropdown">
                                        <div class="row gy-lg-0 gy-3">
                                        <!-- === Property Page Slider Design === -->
                                        <div class="col-lg-3 col-sm-6">
                                            <p class="text-uppercase fw-bolder opacity-75 mb-2">
                                                <small>property pasge slider design</small>
                                            </p>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/spacious-office-space.php">
                                                <small>Slider Vertical</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/slider-horizontal.php">
                                                <small>Slider Horizontal</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/slider-gallery.php">
                                                <small>Slider Gallery</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/full-width.php">
                                                <small>Full Width</small>
                                            </a>
                                        </div>
                                        <!-- === Property page header type === -->
                                        <div class="col-lg-3 col-sm-6">
                                            <p class="text-uppercase fw-bolder opacity-75 mb-2">
                                                <small>Property page header type</small>
                                            </p>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/house-with-swimming-pool.php">
                                                <small>No Header</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/villa-to-be-refurnished.php">
                                                <small>Google Map</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/house-with-garden-and-pool.php">
                                                <small>Revolution Slider</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/unique-house-in-miami.php">
                                                <small>Theme Slider Type 2</small>
                                            </a>
                                        </div>
                                        <!-- === Properties Lists === -->
                                        <div class="col-lg-3 col-sm-6">
                                            <p class="text-uppercase fw-bolder opacity-75 mb-2">
                                                <small>Properties Lists</small>
                                            </p>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/property-list-half-map.php">
                                                <small>Half Map</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/properties-list.php">
                                                <small>Standard – No Sidebar</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/property-list-with-sidebar.php">
                                                <small>Standard – Sidebar Right</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/property-list-sidebar-left.php">
                                                <small>Standard – Sidebar Left</small>
                                            </a>
                                        </div>
                                        <!-- === Properties by Type === -->
                                        <div class="col-lg-3 col-sm-6">
                                            <p class="text-uppercase fw-bolder opacity-75 mb-2">
                                                <small>Properties by Type</small>
                                            </p>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/apartments.php">
                                                <small>Category</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/sales.php">
                                                <small>Type</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/miami.php">
                                                <small>City</small>
                                            </a>
                                            <a class="ps-0 d-block pb-sm-2 pb-1 text-decoration-none text-black-50 text-goldren-300-hover fw-semibold " href="http://localhost/Real-Estate-FrontEnd/south-beach.php">
                                                <small>Area</small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>	
                            </li>
                            <!-- blog -->
                            <li class="nav-item">
                                <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Blog</a>
                            </li>
                            <!-- blog -->
                            <li class="nav-item">
                                <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Contact Us</a>
                            </li>
                            <!-- search option -->
                            <li class="nav-link" id="searchToggle" style="cursor:pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" height="20" width="20">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </li>

                            <!-- Search Form -->
                            <div id="searchBox" class="position-absolute top-100 end-0 mt-2 p-2 bg-white w-100 shadow d-none">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </ul>
                    </div>
                    </div>
                </div>
            </nav>
         </header>
         <!-- main -->
         <main>
            <!-- banar section -->
            <section class="pt-0 pb-0">
                <div class="swiper banar">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide background-size-cover background-repeat-no-repeat background-position-center" style="background-image: url(images/banar-1.jpg);">
                            <div class="container py-lg-5 my-lg-5">
                                <div class="row py-5 my-5">
                                    <div class="com-lg-7 col-md-8 col-12">
                                    <h5 class="fw-medium mb-3">50% off in all products</h5>  
                                    <h1 class="fw-bold fs-1 mb-3">Woman Fashion</h1>
                                    <a href="" class="btn btn-outline-danger btn-lg">Shop Now</a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide background-size-cover background-repeat-no-repeat background-position-center" style="background-image: url(images/banar-2.jpg);">
                            <div class="container py-lg-5 my-lg-5">
                                <div class="row py-5 my-5">
                                    <div class="com-lg-7 col-md-8 col-12">
                                    <h5 class="fw-medium mb-3">50% off in all products</h5>  
                                    <h1 class="fw-bold fs-1 mb-3">Woman Fashion</h1>
                                    <a href="" class="btn btn-outline-danger btn-lg">Shop Now</a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next text-dark bg-white rounded">
                       <i class="fa-solid fa-angle-right fa-2xl"></i>
                    </div>
                    <div class="swiper-button-prev text-dark bg-white rounded">
                        <i class="fa-solid fa-angle-left fa-2xl"></i>
                    </div>
                </div>
            </section>
            <!-- sub banar -->
            <section class="pb-0">
                <div class="container">
                    <div class="row g-4">
                        <!--sub banar-1 -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm overflow-hidden">
                               <image class="img-fluid rounded-1" src="images/banar-4.png"></image>
                               <div class="card-img-overlay d-flex align-items-center justify-content-end">
                                   <div class="px-2">
                                     <h5 class="fw-medium">Super Sale</h5>
                                     <h2 class="fw-bold">New Collection</h2> 
                                     <div>
                                        <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Shop Now</a>
                                     </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <!--sub banar-1 -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm overflow-hidden">
                               <image class="img-fluid rounded-1" src="images/banar-3.png"></image>
                               <div class="card-img-overlay d-flex align-items-center justify-content-end">
                                   <div class="px-2">
                                     <h5 class="fw-medium">Super Sale</h5>
                                     <h2 class="fw-bold">New Collection</h2> 
                                     <div>
                                        <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Shop Now</a>
                                     </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- Exclusive Products -->
            <section>
                <div class="container pt-0">
                   <div class="row justify-content-center text-center">
                     <div class="col-md-8">
                        <h2 class="fw-bold">Exclusive Products</h2>
                     </div>
                   </div>
                   
                   <nav class="d-flex justify-content-center mt-5">
                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#New-Arrival" type="button" role="tab" aria-controls="nav-home" aria-selected="true">New Arrival</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Best-Seller" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Best Seller</button>
                        </div>
                   </nav>
                   <div class="tab-content mt-4" id="nav-tabContent">
                        <!-- New Arrival -->
                        <div class="tab-pane fade show active" id="New-Arrival" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="row g-4">
                                <!-- New Arriva-1 -->
                                <div class="col-lg-3 col-md-6">
                                   <div class="card product-card border-0 overflow-hidden shadow-sm">

                                        <!-- IMAGE -->
                                        <div class="position-relative overflow-hidden">
                                            <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                            <img class="img-fluid object-fit-cover" src="images/banar-3.png" alt="product">

                                            <!-- ACTION ICONS -->
                                            <div class="product-actions position-absolute d-flex flex-column transition">
                                                <button class="border-0 rounded-circle bg-white">🛒</button>
                                                <button class="border-0 rounded-circle bg-white">🔀</button>
                                                <button class="border-0 rounded-circle bg-white">🔍</button>
                                                <button class="border-0 rounded-circle bg-white">❤️</button>
                                            </div>
                                        </div>

                                        <!-- BODY -->
                                        <div class="card-body">
                                            <h5 class="fw-bold">Modern Headphone</h5>
                                            <p class="text-muted small">
                                                High quality wireless headphone with deep bass and noise cancellation.
                                            </p>

                                            <h5 class="text-danger fw-bold">$120</h5>

                                            <!-- COLOR SELECT -->
                                            <div class="d-flex gap-2 mt-3">
                                                <div class="color-btn rounded-circle border-secondary border bg-danger cursor-pointer"></div>
                                                <div class="color-btn rounded-circle border-secondary border bg-warning cursor-pointer"></div>
                                                <div class="color-btn rounded-circle border-secondary border bg-primary cursor-pointer"></div>
                                            </div>

                                            <!-- ADD TO CART -->
                                            <button class="add-cart transition w-100 rounded-2 p-2 border-0 bg-black text-white mt-3">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- New Arriva-2 -->
                                <div class="col-lg-3 col-md-6">
                                   <div class="card product-card border-0 overflow-hidden shadow-sm">

                                        <!-- IMAGE -->
                                        <div class="position-relative overflow-hidden">
                                            <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                            <img class="img-fluid object-fit-cover" src="images/banar-4.png" alt="product">

                                            <!-- ACTION ICONS -->
                                            <div class="product-actions position-absolute d-flex flex-column transition">
                                                <button class="border-0 rounded-circle bg-white">🛒</button>
                                                <button class="border-0 rounded-circle bg-white">🔀</button>
                                                <button class="border-0 rounded-circle bg-white">🔍</button>
                                                <button class="border-0 rounded-circle bg-white">❤️</button>
                                            </div>
                                        </div>

                                        <!-- BODY -->
                                        <div class="card-body">
                                            <h5 class="fw-bold">Modern Headphone</h5>
                                            <p class="text-muted small">
                                                High quality wireless headphone with deep bass and noise cancellation.
                                            </p>

                                            <h5 class="text-danger fw-bold">$120</h5>

                                            <!-- COLOR SELECT -->
                                            <div class="d-flex gap-2 mt-3">
                                                <div class="color-btn rounded-circle border-secondary border bg-danger cursor-pointer"></div>
                                                <div class="color-btn rounded-circle border-secondary border bg-warning cursor-pointer"></div>
                                                <div class="color-btn rounded-circle border-secondary border bg-primary cursor-pointer"></div>
                                            </div>

                                            <!-- ADD TO CART -->
                                            <button class="add-cart transition w-100 rounded-2 p-2 border-0 bg-black text-white mt-3">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="tab-pane fade" id="Best-Seller" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            ok product
                       </div>
                    
                   </div>
                   
                </div>
            </section> 
         </main>
         <!-- footer -->
         <footer>

         </footer>
         <!-- proper.min.js -->
         <script src="{{ asset('js/popper.min.js') }}"></script>
         <!-- bootstrap.min.js -->
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
         <!-- swiper-bundle.min.js -->
         <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
         <script>
            document.getElementById("searchToggle").addEventListener("click", function () {
                document.getElementById("searchBox").classList.toggle("d-none");
            });
        </script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".banar", {
            slidesPerView: 1,
            spaceBetween: 30,
            effect: "fade",
            loop: true,
             autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            });
        </script>
        <script>
            const colors = document.querySelectorAll('.color-btn');

            colors.forEach(color => {
                color.addEventListener('click', function () {

                    // remove active from all
                    colors.forEach(c => c.classList.remove('active'));

                    // add active to clicked one
                    this.classList.add('active');

                    // get selected color
                    let selectedColor = this.getAttribute('data-color');

                    console.log("Selected Color:", selectedColor);

                });
            });
        </script>
        <script>
            window.addEventListener('load', function() {
                const preloader = document.getElementById('preloader');
                setTimeout(() => {
                    preloader.classList.add('hidden');
                    
                    
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 600);
                }, 800);
            });
        </script>
    </body>
</html>