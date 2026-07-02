<section class="my-5 py-5 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-5">Verify Code</h1>
            <div class="col-md-7">
                <input id="code" type="text" name="email" class="form-control mb-3" placeholder="Code">
                <button onclick="Verify()" class="btn btn-info">Confirm</button>
            </div>
        </div>
    </div>
</section>

<script>
    async function Verify(){
        let code = document.getElementById('code').value;
        let email = sessionStorage.getItem('email');
        if(code.length===0){
            alert('Invalid code');
        }else{
            let res = await axios.get("/VerifyLogin/"+email+"/"+code)
            if(res.status===200){
                
            }
        }
    }
</script>