<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<meta http-equiv="Cache-control" content="public">
		<meta http-equiv="expires" content="{{ \Carbon\Carbon::now()->addDays(1)->toRfc822String() }}">
        <meta name="theme-color" content="#b51a1a">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title" content="H2H Unitedtronik - Payment gateway untuk seluruh Pembayaran Digital">
        <meta name="description" content="Payment gateway untuk seluruh Pembayaran Digital, Nikmati kemudahan, kecepatan & kestabilan dalam transaksi dengan Unitedtronik"/>
        <meta name="keywords" content="unitedtronik,agen pulsa,server pulsa,pulsa murah,pln,pdam,tagihan,ppob,all operator,nasional,daftar gratis,isi pulsa,token pln,paket data,internet,voucher game,emoney,dana,ovo,gopay,bpjs">
        <!-- Favicon for chrome and opera -->
        <link rel="icon" sizes="192x192" href="{{ asset('icon/icon.png') }}">
        <link rel="icon" sizes="48x48" href="{{ asset('icon/icon-48.png') }}">
        <link rel="icon" sizes="96x96" href="{{ asset('icon/icon-96.png') }}">
        <link rel="icon" sizes="144x144" href="{{ asset('icon/icon-144.png') }}">
        
        <!-- Favicon for safari-->
        <link rel="apple-touch-icon" href="{{ asset('icon/touch-icon-iphone.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/touch-icon-ipad.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/touch-icon-iphone-retina.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/touch-icon-ipad-retina.png') }}">
        
        <!-- Favicon for IE and windows phone-->
        <meta name="msapplication-square70x70logo" content="{{ asset('icon/icon_smalltile.png') }}">
        <meta name="msapplication-square150x150logo" content="{{ asset('icon/icon_mediumtile.png') }}">
        <meta name="msapplication-wide310x150logo" content="{{ asset('icon/icon_widetile.png') }}">
        
        <title>{{ config('app.name', 'H2H Unitedtronik') }} - Payment gateway untuk seluruh Pembayaran Digital</title>

        <!-- Fonts -->
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/main.css') !!}
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71599465-3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-71599465-3');
        </script>

        @if(\Session::has('alert-success'))
        <!-- Event snippet for Submite Daftar conversion page --> 
        <script> gtag('event', 'conversion', {'send_to': 'AW-786576366/z47ICPiY7eIBEO7niPcC'}); </script> 
        @else
        <!-- Global site tag (gtag.js) - Google Ads: 786576366 --> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-786576366"></script>
        <script>
        window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} 
        gtag('js', new Date()); gtag('config', 'AW-786576366'); 
        </script>
        @endif
        
        <!-- Scripts -->
        <script defer src="{{ asset('js/fontawesome-all.min.js') }}"></script>
        {!! Html::script('js/jquery-3.3.1.min.js') !!}
        {!! Html::script('js/popper.min.js') !!}
        {!! Html::script('js/hammer.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/bootstrap-notify.js') !!}
        {!! Html::script('js/jquery.easing.min.js') !!}
        {!! Html::script('js/jquery.cookie.js') !!}
        
    </head>
    <body>            
        <div class="icon-bar">
            <a href="mailto:h2h@unitedtronik.co.id" class="twitter" data-toggle="tooltip" title="Kirim email!" data-placement="right"><i class="far fa-envelope"></i></a> 
            <a href="javascript:void(0)" class="linkedin logging" data-href="https://telegram.me/CSunitedH2H" data-activity="telegram" data-toggle="tooltip" title="CS Telegram" data-placement="right"><i class="fab fa-telegram"></i></a>
            <a href="https://webreport.h2h.unitedtronik.co.id" class="google" data-toggle="tooltip" title="Webreport" data-placement="right"><i class="far fa-file-excel"></i></a> 
            <a href="https://cetak.webreports.web.id" class="youtube" data-toggle="tooltip" title="Cetak struk" data-placement="right"><i class="fas fa-print"></i></a>
        </div>
        <div id="app">            
            <!-- <div class="row fixed-bottom">
                <div class="col-2">
                    <div class="d-none d-sm-block d-md-block">
                        <div class="card rounded-0 text-white bg-secondary">
                            <div class="card-header rounded-0">
                                Quick Access
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item rounded-0"><a href="http://h2h.unitedtronik.co.id/webreport" class="text-danger no-style" target="_blank"><i class="fab fa-internet-explorer"></i> Webreport <i class="fas fa-angle-right float-right" data-fa-transform="grow-6 down-4"></i></a></li>
                                <li class="list-group-item rounded-0"><a href="http://h2h.unitedtronik.co.id/cetak" class="text-danger no-style" target="_blank"><i class="fas fa-print"></i> Cetak Struk <i class="fas fa-angle-right float-right" data-fa-transform="grow-6 down-4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            @yield('content')
            @include('page.footer')
        </div>  
        <script>
            /* Add touch support on our carousel with Hammer */
            $('.carousel').each(function () {
                var $carousel = $(this);
                var hammertime = new Hammer(this, {
                    recognizers: [
                        [Hammer.Swipe, { direction: Hammer.DIRECTION_HORIZONTAL }]
                    ]
                });
                hammertime.on('swipeleft', function () {
                    $carousel.carousel('next');
                });
                hammertime.on('swiperight', function () {
                    $carousel.carousel('prev');
                });
            });
            
            (function($) {
                "use strict"; /* Start of use strict */
                
                /* Smooth scrolling using jQuery easing */
                $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                        scrollTop: (target.offset().top - 54)
                        }, 1000, "easeInOutExpo");
                        return false;
                    }
                    }
                });
                
                /* Closes responsive menu when a scroll trigger link is clicked */
                $('.js-scroll-trigger').click(function() {
                    $('.navbar-collapse').collapse('hide');
                });
                
                /* Activate scrollspy to add active class to navbar items on scroll */
                $('body').scrollspy({
                    target: '#mainNav',
                    offset: 54
                });

                $('[data-toggle="tooltip"]').tooltip();
                ga('create', 'UA-71599465-3', 'h2h.unitedtronik.co.id');
                ga('send', 'pageview');
                $('.logging').on('click', function(e){
                    var activity = $(this).data('activity');
                    var redirect = $(this).data('href');
                    /* console.log($.cookie(activity)); */
                    if(activity=='harga'){
                        ga('send', 'event', 'Harga', 'Scroll', 'Log H2H');
                    } else if(activity=='daftar') {
                        ga('send', 'event', 'Pendaftaran', 'Click', 'Log H2H');
                    } else if(activity=='telegram') {
                        ga('send', 'event', 'CS Telegram', 'Click', 'Log H2H');
                        if (typeof redirect !== 'undefined') {
                            window.location = redirect
                        }
                    }
                    console.log(activity);
                    /* if($.cookie(activity)!='1'){
                        $.post("{{ url('/api/sendlog') }}",
                        {
                            event: activity
                        },
                        function(data, status){
                            console.log(data);
                            $.cookie(activity, '1', { expires: 7 });
                            if (typeof redirect !== 'undefined') {
                                window.location = redirect
                            }
                        });
                    } */
                })
            })(jQuery); /* End of use strict */
        </script>      
    </body>
</html>
