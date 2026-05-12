<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- -->
            <div class="col-5">
                <h3 class="fw-bold"><span id="PolicyName"></span></h3>
            </div>
            <!-- breadcrumb -->
            <div class="col-7">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/") }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="{{ url("/policy") }}">This Page</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- by policy lst -->
<section>
    <div class="container">
        <div id="ByPolicyList" class="row">
            
        </div>
    </div>
</section>

<script>
    async function PolicyList(){
        let searchParams = new URLSearchParams(window.location.search);
        let type = searchParams.get('type');
        
        if(type === 'about'){
            $("#PolicyName").text('About Us');
        }
        if(type === 'refund'){
            $("#PolicyName").text('Refund');
        }
        if(type === 'terms'){
            $("#PolicyName").text('Terms');
        }
        if(type === 'refund'){
            $("#PolicyName").text('Refund');
        }
        if(type === 'how to buy'){
            $("#PolicyName").text('How to buy');
        }
        if(type === 'contact'){
            $("#PolicyName").text('Contact');
        }
        if(type === 'complain'){
            $("#PolicyName").text('Complain');
        }

        let res = await axios.get("/PolicyByType/"+type);
        let des = res.data['des'];
        $("#ByPolicyList").html(des);
    }
</script>