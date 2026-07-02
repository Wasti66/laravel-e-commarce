<section class="my-5 py-5 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-5">Login</h1>
            <div class="col-md-7">
                <input id="email" type="text" name="email" class="form-control mb-3" placeholder="Email">
                <button onclick="Login()" class="btn btn-info">Login</button>
            </div>
        </div>
    </div>
</section>

<script>
    async function Login(){
        let email = document.getElementById('email').value;
        if(email.length===0){
            alert('Email Required');
        }else{
            let res = await axios.get("/UserLogin/"+email)
            if(res.status===200){
                sessionStorage.setItem('email',email);
                window.location.href="/verify";
            }
        }
    }
</script>