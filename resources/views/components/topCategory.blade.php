<section class="pb-0">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="fw-bold">Top Categories</h2>
            </div>
        </div>
        <!-- top categories -->
        <div class="swiper-container-wrapper position-relative w-100">
            <div class="swiper topCategories">
                <div class="swiper-wrapper" id="TopCategory">
                      

                </div>
            </div>

            <div class="swiper-button-next text-dark" style="margin-right: -40px">
                <i class="fa-solid fa-angle-right fa-2xl"></i>
            </div>

            <div class="swiper-button-prev text-dark" style="margin-left: -40px">
                <i class="fa-solid fa-angle-left fa-2xl"></i>
            </div>
        </div>
    </div>
</section>

<script>
    var swiper = new Swiper(".topCategories", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
        },
    });
    TopCatagories()
    async function TopCatagories(){
        let res = await axios.get("/CategoryList");
         $("#TopCategory").empty()
         res.data['data'].forEach((item)=>{
            let EachItem = `<div class="swiper-slide shadow-sm">
                        <a href="#" class="overflow-hidden nav-link topcatagoryCard">
                            <img class="w-100 d-block rounded-circle" src="${item['categoryImg']}" alt="">
                            <div class="card-img-overlay topcatagoryCard-hover opacity-0 d-flex justify-content-center align-items-center rounded-circle transition">
                                <p class="text-danger fw-medium">${item['categoryName']}</p>
                            </div>
                        </a>
                    </div>`
            $("#TopCategory").append(EachItem)    
            
         })
    }
</script>