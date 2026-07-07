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
    async function Verify() {
        let code = document.getElementById('code').value;
        let email = sessionStorage.getItem('email');
        if (code.trim().length === 0) {
            alert('Invalid code');
        } else {
            $(".preloader").delay(400).fadeIn(400).removeClass('loaded');
            try {
                let res = await axios.get("/VerifyLogin/" + email + "/" + code);
                if (res.status === 200) {
                    if (sessionStorage.getItem('last_location')) {
                        let lastLoc = sessionStorage.getItem('last_location');
                        sessionStorage.removeItem('last_location'); // Clear it after use
                        window.location.href = lastLoc; // Fixed 'herf' to 'href'
                    } else {
                        window.location.href = "/";
                    }
                } else {
                    $(".preloader").delay(400).fadeOut(400).addClass('loaded');
                    alert('Verification Failed');
                }
            } catch (e) {
                $(".preloader").delay(400).fadeOut(400).addClass('loaded');
                alert('Verification Failed. Please try again.');
            }
        }
    }
</script>