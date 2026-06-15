<section>
    <div class="container">
       <div class="row">
          <!-- product images -->
          <div class="col-md-6">
            <div class="card card-body shadow-sm">
               <!-- main images --> 
               <img id="product_img1" src="images/p-1.jpg" class="w-100" alt="product-images-main">
                <!-- sub images --> 
               <div class="row g-4">
                    <div class="col-3">
                        <img id="img1" src="images/p-1.jpg" class="border p-1" style="height:80px; width:100px" alt="product-images-1">
                    </div>
                    <div class="col-3">
                        <img id="img2" src="images/p-2.jpg" class="border p-1" style="height:80px; width:100px" alt="product-images-1">
                    </div>
                    <div class="col-3">
                        <img id="img3" src="images/p-3.jpg" class="border p-1" style="height:80px; width:100px" alt="product-images-1">
                    </div>
                    <div class="col-3">
                        <img id="img4" src="images/p-4.jpg" class="border p-1" style="height:80px; width:100px" alt="product-images-1">
                    </div>
               </div>
            </div>
          </div>
          <!-- product details -->
          <div class="col-md-6">
             <!-- product title and price -->
             <div class="mb-4">
                <h1 id="pr_title" class="mb-2">Title</h1>
                <h4 id="pr_price">Price</h4>
             </div>
             <p id="pr_des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum illo suscipit nostrum sapiente quasi adipisci voluptatum vitae molestiae facere. Tenetur omnis iste, voluptatem est officia doloremque quod qui ad voluptatibus!</p>
             <!-- size -->
             <label for="size">Size</label>
             <select name="size" id="size" class="form-control"></select>
             <!-- color -->
             <label for="color">Color</label>
             <select name="color" id="color" class="form-control"></select>
             <!-- quantity -->
             <div class="d-flex flex-wrap align-items-center gap-3 mt-4">

                <!-- Quantity -->
                <div class="input-group" style="width: 140px;">
                    <button class="btn btn-outline-secondary minus" type="button">-</button>

                    <input type="text" class="form-control text-center" value="1">

                    <button class="btn btn-outline-secondary plus" type="button">+</button>
                </div>

                <!-- Add to Cart -->
                <button class="btn btn-danger px-4">
                    <i class="bi bi-cart-fill me-2"></i>
                    Add to Cart
                </button>

                <!-- Wishlist -->
                <button class="btn btn-outline-danger">❤️</button>

             </div>

          </div>
       </div> 
    </div>
</section>
<script>
   

    document.getElementById('product_img1').src = "images/p-1.jpg";
    document.getElementById('img1').src = "images/p-1.jpg";
    document.getElementById('img2').src = "images/p-2.jpg";
    document.getElementById('img3').src = "images/p-3.jpg";
    document.getElementById('img4').src = "images/p-4.jpg";

   

    $('#img1').on('click', function () {
        $('#product_img1').attr('src', 'images/p-1.jpg');
    });

    $('#img2').on('click', function () {
        $('#product_img1').attr('src', 'images/p-2.jpg');
    });

    $('#img3').on('click', function () {
        $('#product_img1').attr('src', 'images/p-3.jpg');
    });

    $('#img4').on('click', function () {
        $('#product_img1').attr('src', 'images/p-4.jpg');
    });
</script>