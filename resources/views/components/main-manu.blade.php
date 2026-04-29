<nav class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <ul class="navbar-nav">
                <!-- home -->
                <li class="nav-item">
                    <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Home</a>
                </li>
                <!-- about -->
                <li class="nav-item">
                    <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">About</a>
                </li>
                <!-- product -->
                <li class="nav-item hover-dropdown hover-dropdown-100">
                    <a class="text-body fw-medium nav-link transition transition-hover hover-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                    <div class="dropdown-menu end-0 border-0 p-0 mt-0 bg-transparent dropdown-menu-hover">
                        <div class="container bg-white border mx-auto w-lg-75 p-3 border rounded-lg-0 rounded responsve-dropdown">
                            <div class="row gy-lg-0 gy-3">
                            <!-- === Property Page Slider Design === -->
                            <div class="col-lg-3 col-sm-6" id="CategoryItem">
                                
                            </div>
                           
                            </div>
                        </div>
                    </div>	
                </li>
                <!-- blog -->
                <li class="nav-item">
                    <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Blog</a>
                </li>
                <!-- blog -->
                <li class="nav-item">
                    <a href="#home" class="text-body fw-medium nav-link transition transition-hover hover-link">Contact Us</a>
                </li>
                <!-- search option -->
                <li class="nav-link" id="searchToggle" style="cursor:pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" height="20" width="20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </li>

                <!-- Search Form -->
                <div id="searchBox" class="position-absolute top-100 end-0 mt-2 p-2 bg-white w-100 shadow d-none">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </ul>
        </div>
        </div>
    </div>
</nav>
<script>
    Category();

    async function Category() {
        let res = await axios.get("/CategoryList");

        let data = res.data.data;

        let perColumn = 10;
        let container = $('#CategoryItem').parent();

        $('#CategoryItem').remove();

        for (let i = 0; i < data.length; i += perColumn) {

            let columnItems = data.slice(i, i + perColumn);

            let column = `
                <div class="col-lg-2 col-sm-6">
                    <p class="text-uppercase fw-bolder opacity-75 mb-2">
                        <small>Category</small>
                    </p>
                    ${columnItems.map(item => `
                        <a class="d-block pb-2 text-decoration-none text-black-50 hover-link transition fw-semibold categoryItem-Hover" href="#">${item.categoryName}</a>
                    `).join('')}
                </div>
            `;

            container.append(column);
        }
    }
</script>