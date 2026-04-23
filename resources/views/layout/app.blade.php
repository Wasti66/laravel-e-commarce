<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    @include('components.head')
    <body>
        <!-- preloader -->
        @include('components.preloader')
        <!-- header -->
        @include('components.header')
         <!-- main -->
         <main>
            @yield('contant')
         </main>
         <!-- footer -->
         @include('components.footer')
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
        <!-- home banar -->
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
        
        
    </body>
</html>