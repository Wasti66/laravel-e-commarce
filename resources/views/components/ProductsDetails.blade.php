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

                    <input type="text" class="form-control text-center" id="pr_qty" value="1">

                    <button class="btn btn-outline-secondary plus" type="button">+</button>
                </div>

                <!-- Add to Cart -->
                <button onclick="AddToCart()" class="btn btn-danger px-4">
                    <i class="bi bi-cart-fill me-2"></i>
                    Add to Cart
                </button>

                <!-- Wishlist -->
                <button onclick="AddToWishList()" class="btn btn-outline-danger">❤️</button>

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

        document.getElementById('pr_tab_des').innerText = Details[0]['des'];

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
    
    async function AddToCart() {
            try {
                let pr_size = document.getElementById('pr_size').value;
                let pr_color = document.getElementById('pr_color').value;
                let pr_qty = document.getElementById('pr_qty').value;
                
                if (pr_size.trim().length === 0) {
                    alert('Size Required');
                } else if (pr_color.trim().length === 0) {
                    alert('Color Required');
                } else if (pr_qty.trim().length === 0 || Number(pr_qty) <= 0) {
                    alert('Quantity Required');
                } else {
                    $(".preloader").delay(400).fadeIn(400).removeClass('loaded');
                    let res = await axios.post("/CreateCartList", {
                        "product_id": id, 
                        "color": pr_color,
                        "size": pr_size,
                        "qty": pr_qty
                    });
                    $(".preloader").delay(400).fadeOut(400).addClass('loaded');
                    if(res.status === 200){
                        alert('Request Successful');
                    }
                    
                }
            } catch (e) {
                if (e.response?.status === 401) {
                    sessionStorage.setItem('last_location', window.location.href);
                    window.location.href = "/Login";
                } else {
                    alert('Something went wrong. Please try again.');
                }
        }
    }

async function AddToWishList() {
    try{
        $(".preloader").delay(90).fadeIn(100).removeClass('loaded');
        let res = await axios.get("/CreateWishList/"+id);
        $(".preloader").delay(90).fadeOut(100).addClass('loaded');
        if(res.status===200){
            alert("Request Successful")
        }
        
    }catch (e) {
        if(e.response.status===401){
            sessionStorage.setItem("last_location",window.location.href)
            window.location.href="/Login"
        }
    }
}

async function productReview(){
        let res = await axios.get("/ListReviewByProduct/"+id);
        let Details=await res.data['data'];

        $("#reviewList").empty();

        Details.forEach((item,i)=>{
            let each= `<li class="list-group-item">
                <h6>${item['profile']['cus_name']}</h6>
                <p class="m-0 p-0">${item['descreption']}</p>
                <div class="rating_wrap">
                    <div class="rating">
                        <div class="product_rate" style="width:${parseFloat(item['rateing'])}%"></div>
                    </div>
                </div>
            </li>`;
           $("#reviewList").append(each);
        })
    }
     async function AddReview(){
        let reviewText=document.getElementById('reviewTextID').value;
        let reviewScore=document.getElementById('reviewScore').value;
        if(reviewScore.length===0){
            alert("Score Required !")
        }
        else if(reviewText.length===0){
            alert("Review Required !")
        }
        else{
            $(".preloader").delay(90).fadeIn(100).removeClass('loaded');
            let postBody={description:reviewText, rating:reviewScore, product_id:id}
            let res=await axios.post("/CreateProductReview",postBody);
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
            await productReview();
        }


    }
</script>