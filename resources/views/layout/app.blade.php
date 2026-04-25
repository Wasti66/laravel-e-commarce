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
         <!-- proper.min.js -->
         <script src="{{ asset('js/popper.min.js') }}"></script>
         <!-- bootstrap.min.js -->
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
         <script>
            document.getElementById("searchToggle").addEventListener("click", function () {
                document.getElementById("searchBox").classList.toggle("d-none");
            });
        </script>
    </body>
</html>