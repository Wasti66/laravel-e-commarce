<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- -->
            <div class="col-5">
                <h3 class="fw-bold">Brand: <span id="BrandName"></span></h3>
            </div>
            <!-- breadcrumb -->
            <div class="col-7">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/") }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/by-brand") }}">This Page</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- product list Brand -->
<section>
    <div class="container">
        <div id="byBrandList" class="row">
            
        </div>
    </div>
</section>
<script>

    async function ByBrand(){

        let searchParams = new URLSearchParams(window.location.search);
        let id = searchParams.get('id');

        $('#byBrandList').empty();
        let res = await axios.get(`/ListProductByBrand/${id}`);

        let Brands = res.data['data'];

        if(Brands.length === 0){

            $("#byBrandList").append(`
                <div class="col-12 text-center py-5">
                    <h2 class="text-danger">Brand Not Found</h2>
                </div>
            `);

        }else{

            $('#BrandName').text(Brands[0]['brand']['brandName']);

            Brands.forEach((item, i)=>{

                let EachItem = `
                    <div class="col-lg-3 col-md-6">

                        <div class="card product-card border-0 overflow-hidden shadow-sm">

                            <!-- IMAGE -->
                            <div class="position-relative overflow-hidden">

                                <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">
                                    SALE
                                </span>

                                <a href="/details?id=${item['id']}">
                                    <img class="img-fluid object-fit-cover"
                                    src="${item['image']}"
                                    alt="product">
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
                                    <a href="/details?id=${item['id']}" class="nav-link">
                                        ${item['title']}
                                    </a>
                                </h5>

                                <p class="text-muted small">
                                    ${item['short_des']}
                                </p>

                                <h5 class="text-danger fw-bold">
                                    ${item['price']}
                                </h5>

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
                `;

                $("#byBrandList").append(EachItem);

            });
        }
    }

</script>