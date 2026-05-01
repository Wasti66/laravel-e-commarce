<section>
    <div class="container pt-0">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
            <h2 class="fw-bold">Exclusive Products</h2>
            </div>
        </div>
        
        <nav class="d-flex justify-content-center mt-5">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#TopProduct" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Top</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Best-Seller" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Best Seller</button>
            </div>
        </nav>
        <div class="tab-content mt-4" id="nav-tabContent">
            <!-- New Arrival -->
            <div class="tab-pane fade show active" id="TopProduct" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row g-4">
                    
                    
                </div>
            </div>
            <div class="tab-pane fade" id="Best-Seller" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                ok product
            </div>
        
        </div>
        
    </div>
</section>
<script>
    Top();
    async function Top(){
        let res = await axios.get("/ListProductByRemark/top");
        $('#TopProduct').empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                        <div class="card product-card border-0 overflow-hidden shadow-sm">

                            <!-- IMAGE -->
                            <div class="position-relative overflow-hidden">
                                <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                <a href="#">
                                    <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                </a>
                                

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
                                <h5 class="fw-bold">
                                    <a href="#" class="nav-link">${item['title']}</a>
                                </h5>
                                <p class="text-muted small">${item['short_des']}</p>

                                <h5 class="text-danger fw-bold">${item['price']}</h5>

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
                    </div>`
            $('#TopProduct').append(EachItem);        
        })
    }
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