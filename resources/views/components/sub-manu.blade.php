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
                <ul class="list-unstyled d-flex align-items-center mb-0">
                    @if(Cookie::get('token') !== null)
                        <li class="me-2">
                            <a class="text-body fw-medium nav-link ms-3" href="{{ url('/profile') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="16" width="16">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <span>Account</span> 
                            </a>
                        </li>

                        <li>
                            <a class="btn btn-danger btn-sm" href="{{ url('/logOut') }}">
                                Logout
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="text-body fw-medium nav-link ms-2" href="{{ url('/Login') }}">
                                Login
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>