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
                <h1 id="pr_title" class="mb-2"></h1>
                <h4 id="pr_price" class="text-danger"></h4>
             </div>
             <p id="pr_des"></p>
             <!-- size -->
             <select name="size" id="pr_size" class="form-control mb-3"></select>
             <!-- color -->
             <select name="color" id="pr_color" class="form-control"></select>
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
   

    $('.plus').on('click', function (){
        if($(this).prev().val()){
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.minus').on('click', function (){
        if($(this).next().val() > 1){
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    })

    let searchParams = new URLSearchParams(window.location.search);
    let id = searchParams.get('id');

    productDetails()
    async function productDetails(){
        let res = await axios.get("/ProductDetailsById/"+id);


        let Details = res.data['data'];

        document.getElementById('product_img1').src = Details[0]['img1'];
        document.getElementById('img1').src = Details[0]['img1'];
        document.getElementById('img2').src = Details[0]['img2'];
        document.getElementById('img3').src = Details[0]['img3'];
        document.getElementById('img4').src = Details[0]['img4'];

        document.getElementById('pr_title').innerText=Details[0]['product']['title'];
        document.getElementById('pr_price').innerText=`$ ${Details[0]['product']['price']}`;
        document.getElementById('pr_des').innerText=Details[0]['des'];

        // Product Size & Color
        let size= Details[0]['size'].split(',');
        let color=Details[0]['color'].split(',');

        let SizeOption=`<option value=''>Choose Size</option>`;
        $("#pr_size").append(SizeOption);
        size.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`;
            $("#pr_size").append(option);
        })

        let ColorOption=`<option value=''>Choose Color</option>`;
        $("#pr_color").append(ColorOption);
        color.forEach((item)=>{
            let option=`<option value='${item}'>${item}</option>`;
            $("#pr_color").append(option);
        })

        $('#img1').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img1']);
        });
        $('#img2').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img2']);
        });
        $('#img3').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img3']);
        });
        $('#img4').on('click', function() {
            $('#product_img1').attr('src', Details[0]['img4']);
        });
        
    }

    
    
</script>