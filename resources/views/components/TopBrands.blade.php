<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="fw-bold mb-2">Top Brands</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum doloribus velit qui repellendus, quasi distinctio.</p>
            </div>
        </div>

        <!-- Top Brands -->
        <div class="row g-4" id="TopBrands">

        </div>
    </div>
</section>

<script>
    topBrands();

    async function topBrands() {
        let res = await axios.get("/BrandList");

        $("#TopBrands").empty();

        res.data.data.forEach((item) => {

            let EachItem = `
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="/by-brand?id=${item.id}" class="nav-link text-center">
                        <img class="img-fluid border shadow-sm"
                             src="${item.brandImg}"
                             alt="${item.brandName}">

                        <p class="mt-2 mb-0 fw-medium">
                            ${item.brandName}
                        </p>
                    </a>
                </div>
            `;

            $("#TopBrands").append(EachItem);
        });
    }
</script>