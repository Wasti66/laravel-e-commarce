<section>
    <div class="container pt-0">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
            <h2 class="fw-bold">Exclusive Products</h2>
            </div>
        </div>
        
        <nav class="d-flex justify-content-center mt-5">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <!-- top -->
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#TopProduct" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Top</button>
                <!-- popular -->
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#PopularProduct" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Popular</button>
                <!-- new -->
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#NewProduct" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New</button>
                <!-- special -->
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#SpecialProduct" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Special</button>
                <!-- trending -->
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#TrendingProduct" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Trending</button> 
                <!-- regular -->
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#RegularProduct" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Regular</button>    
            </div>
        </nav>
        <div class="tab-content mt-4" id="nav-tabContent">
            <!-- top -->
            <div class="tab-pane fade show active" id="TopProduct" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row g-4"></div>
            </div>
            <!-- popular -->
            <div class="tab-pane fade" id="PopularProduct" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="row g-4" id="popularRow">

                </div>
            </div>
            <!-- new -->
            <div class="tab-pane fade" id="NewProduct" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="row g-4" id="newRow">

                </div>
            </div>
            <!-- Special -->
            <div class="tab-pane fade" id="SpecialProduct" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="row g-4" id="SpecialRow"></div>
            </div>
            <!-- Trending -->
            <div class="tab-pane fade" id="TrendingProduct" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="row g-4" id="TrendingRow"></div>
            </div>
            <!-- Regular -->
            <div class="tab-pane fade" id="RegularProduct" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="row g-4" id="RegularRow"></div>
            </div>
        </div>
        
    </div>
</section>
<script>
    async function Top(){
        let res = await axios.get("/ListProductByRemark/top");
        $('#TopProduct').empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                            <div class="card product-card border-0 overflow-hidden shadow-sm">

                                <!-- IMAGE -->
                                <div class="position-relative overflow-hidden">
                                    <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                    <a href="/details?id=${item['id']}">
                                        <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                    </a>
                                    

                                    <!-- ACTION ICONS -->
                                    <div class="product-actions position-absolute d-flex flex-column transition">
                                        <a href="/details?id=${item['id']}" class="nav-link rounded-circle bg-white">🛒</a>
                                        <button class="border-0 rounded-circle bg-white">🔀</button>
                                        <button class="border-0 rounded-circle bg-white">🔍</button>
                                        <button class="border-0 rounded-circle bg-white">❤️</button>
                                    </div>
                                </div>

                                <!-- BODY -->
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        <a href="/details?id=${item['id']}" class="nav-link">${item['title']}</a>
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
    async function Popular(){
        let res = await axios.get("/ListProductByRemark/popular");
        $("#popularRow").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                        <div class="card product-card border-0 overflow-hidden shadow-sm">

                            <!-- IMAGE -->
                            <div class="position-relative overflow-hidden">
                                <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                <a href="/details?id=${item['id']}">
                                    <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                </a>
                                

                                <!-- ACTION ICONS -->
                                <div class="product-actions position-absolute d-flex flex-column transition">
                                    <a href="/details?id=${item['id']}" class="nav-link rounded-circle bg-white">🛒</a>
                                    <button class="border-0 rounded-circle bg-white">🔀</button>
                                    <button class="border-0 rounded-circle bg-white">🔍</button>
                                    <button class="border-0 rounded-circle bg-white">❤️</button>
                                </div>
                            </div>

                            <!-- BODY -->
                            <div class="card-body">
                                <h5 class="fw-bold">
                                    <a href="/details?id=${item['id']}" class="nav-link">${item['title']}</a>
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
            $("#popularRow").append(EachItem);
        })
    }
    async function New(){
        let res = await axios.get("/ListProductByRemark/new");
        $("#newRow").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                            <div class="card product-card border-0 overflow-hidden shadow-sm">

                                <!-- IMAGE -->
                                <div class="position-relative overflow-hidden">
                                    <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                    <a href="/details?id=${item['id']}">
                                        <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                    </a>
                                    

                                    <!-- ACTION ICONS -->
                                    <div class="product-actions position-absolute d-flex flex-column transition">
                                        <a href="/details?id=${item['id']}" class="border-0 rounded-circle bg-white">🛒</a>
                                        <button class="border-0 rounded-circle bg-white">🔀</button>
                                        <button class="border-0 rounded-circle bg-white">🔍</button>
                                        <button class="border-0 rounded-circle bg-white">❤️</button>
                                    </div>
                                </div>

                                <!-- BODY -->
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        <a href="/details?id=${item['id']}" class="nav-link">${item['title']}</a>
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
            $('#newRow').append(EachItem);        
        })
    }
    async function Special(){
        let res = await axios.get("/ListProductByRemark/special");
        $("#SpecialRow").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                            <div class="card product-card border-0 overflow-hidden shadow-sm">

                                <!-- IMAGE -->
                                <div class="position-relative overflow-hidden">
                                    <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                    <a href="/details?id=${item['id']}">
                                        <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                    </a>
                                    

                                    <!-- ACTION ICONS -->
                                    <div class="product-actions position-absolute d-flex flex-column transition">
                                        <a href="/details?id=${item['id']}" class="nav-link rounded-circle bg-white">🛒</a>
                                        <button class="border-0 rounded-circle bg-white">🔀</button>
                                        <button class="border-0 rounded-circle bg-white">🔍</button>
                                        <button class="border-0 rounded-circle bg-white">❤️</button>
                                    </div>
                                </div>

                                <!-- BODY -->
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        <a href="/details?id=${item['id']}" class="nav-link">${item['title']}</a>
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
            $('#SpecialRow').append(EachItem);        
        })
    }
    async function Trending(){
        let res = await axios.get("/ListProductByRemark/trending");
        $("#TrendingRow").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                            <div class="card product-card border-0 overflow-hidden shadow-sm">

                                <!-- IMAGE -->
                                <div class="position-relative overflow-hidden">
                                    <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                    <a href="/details?id=${item['id']}">
                                        <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                    </a>
                                    

                                    <!-- ACTION ICONS -->
                                    <div class="product-actions position-absolute d-flex flex-column transition">
                                        <a href="/details?id=${item['id']}" class="nav-link rounded-circle bg-white">🛒</a>
                                        <button class="border-0 rounded-circle bg-white">🔀</button>
                                        <button class="border-0 rounded-circle bg-white">🔍</button>
                                        <button class="border-0 rounded-circle bg-white">❤️</button>
                                    </div>
                                </div>

                                <!-- BODY -->
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        <a href="/details?id=${item['id']}" class="nav-link">${item['title']}</a>
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
            $('#TrendingRow').append(EachItem);        
        })
    }
    async function Regular(){
        let res = await axios.get("/ListProductByRemark/regular");
        $("#RegularRow").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem = `<div class="col-lg-3 col-md-6">
                            <div class="card product-card border-0 overflow-hidden shadow-sm">

                                <!-- IMAGE -->
                                <div class="position-relative overflow-hidden">
                                    <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>
                                    <a href="/details?id=${item['id']}">
                                        <img class="img-fluid object-fit-cover" src="${item['image']}" alt="product">
                                    </a>
                                    

                                    <!-- ACTION ICONS -->
                                    <div class="product-actions position-absolute d-flex flex-column transition">
                                        <a href="/details?id=${item['id']}" class="nav-link rounded-circle bg-white">🛒</a>
                                        <button class="border-0 rounded-circle bg-white">🔀</button>
                                        <button class="border-0 rounded-circle bg-white">🔍</button>
                                        <button class="border-0 rounded-circle bg-white">❤️</button>
                                    </div>
                                </div>

                                <!-- BODY -->
                                <div class="card-body">
                                    <h5 class="fw-bold">
                                        <a href="/details?id=${item['id']}" class="nav-link">${item['title']}</a>
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
            $('#RegularRow').append(EachItem);        
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