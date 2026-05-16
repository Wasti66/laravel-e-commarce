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