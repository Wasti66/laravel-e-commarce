<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg-secondary-subtle page-title-mini py-4">
    <div class="container">
        <div class="row">
            <!-- -->
            <div class="col-5">
                <h3 class="fw-bold">Cart</h3>
            </div>
            <!-- breadcrumb -->
            <div class="col-7">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/") }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/cart") }}">This Page</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>


<!-- cart List -->
<div class="my-5 py-5">
    <div class="container my-5">
        <div class="row align-items-center">
            <table class="table table-responsive table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                        <th scope="col">Total</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody id="byList">
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="px-0">
                            <div class="row g-0 align-items-center text-center">
                                <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                    <h4>Total: $ <span id="total"></span></h4>
                                </div>
                                <div class="col-lg-8 col-md-6  text-start  text-md-end">
                                    <button data-bs-target="#PaymentMethodModel" data-bs-toggle="modal" onclick="CheckOut(event)" class="btn btn-outline-dark btn-sm" type="button">Check Out</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script>
    async function CartList(){
        let res = await axios.get("/CartList");
        console.log(res.data);
        $('#byList').empty();
        res.data['data'].forEach((item, i) => {
            let EachItem = `
                            <tr class="py-3">
                                <td><img src="${item['product']['image']}" height="80" widht="80"></td>
                                <td><p>${item['product']['title']}</p></td>
                                <td><p>${item['qty']}</p></td>
                                <td><p>${item['size']}</p></td>
                                <td><p>${item['color']}</p></td>
                                <td class="fw-bold"><p>${item['price']}</p></td>
                                <td><a class="remove text-dark" href="#" data-id="${item['product_id']}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="30px" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                                </td>
                            </tr>     
                        `;
            $('#byList').append(EachItem);            
        });

        await CartTotal(res.data['data']);

        $(".remove").on('click', function(){
            let id = $(this).data('id');
            RemoveCartList(id)
        })
    }

    async function CartTotal(data){
        let Total=0;
        data.forEach((item,i)=>{
            Total=Total+parseFloat(item['price']);
        })
        $("#total").text(Total);
    }

    async function RemoveCartList(id){
        $(".preloader").delay(400).fadeIn(400).removeClass('loaded');
        let res = await axios.get("/DeleteCartList/"+id);
        $(".preloader").delay(400).fadeOut(400).addClass('loaded');
        if(res.status === 200){
            await CartList();
        }else{
            alert("Request Failed");
        }
    }
    
    async function CheckOut(){
        $(".preloader").delay(90).fadeIn(100).removeClass('loaded');

        $("#paymentList").empty();

        let res=await axios.get("/CreateInvoic");

        $(".preloader").delay(90).fadeOut(100).addClass('loaded');


        if(res.status===200) {

            $("#PaymentMethodModel").modal('show');

            res.data['data'][0]['paymentMethod'].forEach((item,i)=>{
                let EachItem=`<tr>
                                <td><img class="w-50" src=${item['logo']} alt="product"></td>
                                <td><p>${item['name']}</p></td>
                                <td><a class="btn btn-danger btn-sm" href="${item['redirectGatewayURL']}">Pay</a></td>
                            </tr>`
                $("#paymentList").append(EachItem);
            })

        }
        else{
            alert("Request Fail");
        }

    }

</script>



