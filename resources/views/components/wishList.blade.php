<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row">
            <!-- -->
            <div class="col-5">
                <h3 class="fw-bold">Wish</h3>
            </div>
            <!-- breadcrumb -->
            <div class="col-7">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/") }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/wish") }}">This Page</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>



<div class="mt-5">
    <div class="container my-5">
        <div id="byList" class="row">
        </div>
    </div>
</div>



<script>
async function WishList() {

    let res = await axios.get('/ProductWishList');

    $("#byList").empty();

    res.data.data.forEach((item, index) => {

        let stars = '';

        for (let j = 1; j <= 5; j++) {

            if (j <= item.product.star) {
                stars += `
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="18" height="18"
                        fill="#fbbf24"
                        viewBox="0 0 24 24"
                        class="me-1">
                        <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.386a.562.562 0 01-.84.61L12 17.77l-4.736 2.87a.562.562 0 01-.84-.61l1.285-5.386a.563.563 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                    </svg>`;
            } else {
                stars += `
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="18" height="18"
                        fill="none"
                        stroke="#fbbf24"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        class="me-1">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.386a.562.562 0 01-.84.61L12 17.77l-4.736 2.87a.562.562 0 01-.84-.61l1.285-5.386a.563.563 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                    </svg>`;
            }
        }

        let EachItem = `
            <div class="col-lg-3 col-md-6">
                <div class="card product-card border-0 overflow-hidden shadow-sm">

                    <div class="position-relative overflow-hidden">
                        <span class="badge text-bg-danger position-absolute px-2 py-2 m-3">SALE</span>

                        <a href="/details?id=${item.product.id}">
                            <img class="img-fluid object-fit-cover"
                                 src="${item.product.image}"
                                 alt="product">
                        </a>

                        <div class="product-actions position-absolute d-flex flex-column transition">
                            <a href="/details?id=${item.product.id}" class="nav-link rounded-circle bg-white">🛒</a>
                            <button class="border-0 rounded-circle bg-white">🔀</button>
                            <button class="border-0 rounded-circle bg-white">🔍</button>
                            <button class="border-0 rounded-circle bg-white">❤️</button>
                        </div>
                    </div>

                    <div class="card-body">

                        <h5 class="fw-bold">
                            <a href="/details?id=${item.product.id}" class="nav-link">
                                ${item.product.title}
                            </a>
                        </h5>

                        <h5 class="text-danger fw-bold">
                            ৳${item.product.price}
                        </h5>

                        <div class="d-flex mb-3">
                            ${stars}
                        </div>
                        <button class="btn btn-sm btn-danger remove" data-id="${item.product.id}">Remove</button>
                    </div>

                </div>
            </div>
        `;

        $("#byList").append(EachItem);

    });

    $("#remove").on('click', function(){
        
    })

}
</script>
