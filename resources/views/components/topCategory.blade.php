<section class="pb-0">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2 class="fw-bold mb-2">Top Category</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum doloribus velit qui repellendus, quasi distinctio.</p>
            </div>
        </div>

        <!-- Top Categories -->
        <div class="row g-4" id="TopCategory">

        </div>
    </div>
</section>

<script>
    async function TopCatagories() {
        let res = await axios.get("/CategoryList");

        $("#TopCategory").empty();

        res.data.data.forEach((item) => {

            let EachItem = `
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="/by-category?id=${item.id}" class="nav-link text-center">
                        <img class="img-fluid border shadow-sm"
                             src="${item.categoryImg}"
                             alt="${item.categoryName}">

                        <p class="mt-2 mb-0 fw-medium">
                            ${item.categoryName}
                        </p>
                    </a>
                </div>
            `;

            $("#TopCategory").append(EachItem);
        });
    }

    //TopCatagories();
</script>