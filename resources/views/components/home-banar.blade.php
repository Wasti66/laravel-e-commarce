<section class="pt-0 pb-0">
    <div class="swiper banar">
        <div class="swiper-wrapper" id="HomeBanar"></div>
        
        <div class="swiper-button-next text-dark bg-white rounded">
            <i class="fa-solid fa-angle-right fa-2xl"></i>
        </div>
        <div class="swiper-button-prev text-dark bg-white rounded">
            <i class="fa-solid fa-angle-left fa-2xl"></i>
        </div>
    </div>
</section>
<!-- home banar -->
<script>
    var swiper;

    async function Banar(){

        let res = await axios.get("/ListProductSlider");

        $('#HomeBanar').empty();

        res.data['data'].forEach((item,i)=>{

            let EachItem = `
            <div class="swiper-slide background-size-cover background-repeat-no-repeat background-position-center"
                style="background-image: url('${item['image']}');">

                <div class="container py-lg-5 my-lg-5">
                    <div class="row py-5 my-5">
                        <div class="col-lg-7 col-md-8 col-12">
                            <h5 class="fw-medium mb-3">${item['short_des']}</h5>  
                            <h1 class="fw-bold fs-1 mb-3">${item['title']}</h1>
                            <a href="" class="btn btn-outline-danger btn-lg">Shop Now</a>   
                        </div>
                    </div>
                </div>

            </div>`;

            $('#HomeBanar').append(EachItem);        
        });

        swiper = new Swiper(".banar", {
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
    }

    Banar();
</script>