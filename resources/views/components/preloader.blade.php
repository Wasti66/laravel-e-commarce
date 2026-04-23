<div id="preloader" class="loader position-fixed z-3 d-flex align-items-center justify-content-center top-0 start-0 vh-100 w-100" style="background-color: #dee2e6e0;">
    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<script>
    window.addEventListener('load', function() {
        const preloader = document.getElementById('preloader');
        setTimeout(() => {
            preloader.classList.add('hidden');
            
            
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 600);
        }, 800);
    });
</script>