<nav class="navbar navbar-expand-lg navbar-footer navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active" target="_blank" href="https://www.unitedtronik.co.id">Copyright © {{ \Carbon\Carbon::now()->format('Y') }} Unitedtronik</a></li>
        </ul>
    </div>
</nav>
<script>
    $(window).on('load resize', function() {
        if($(window).width() <= 768) {
            $('.copyright').removeClass('mr-auto').addClass('mx-auto');
        } else {
            $('.copyright').removeClass('mx-auto').addClass('mr-auto');
        }
    });
</script>