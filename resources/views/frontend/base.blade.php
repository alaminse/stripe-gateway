<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf" content="{{ csrf_token() }}">
    <title>Al Mumayaz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/media/other/favicon.jpg') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/icons.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/plugins.css') }}">
    <!-- Revolution Slider CSS -->
    <link href="{{ asset('public/frontend/assets/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/assets/revolution/css/navigation.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSI5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- ================For Icons================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">
    <!-- Modernizer JS -->
    <script src="{{ asset('public/frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    {{-- Tooster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />

</head>

<body>
<div class="wrapper wrapper-2 wrapper-3">
    <header class="header-area header-padding-1 section-padding-1">
        <div class="header-bottom sticky-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                        <div class="logo">
                            
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                        
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                        <div class="header-right-wrap"> 
                            <div class="same-style cart-wrap">
                                <a href="{{ route('show.cart') }}">
                                    <i class="negan-icon-bag"></i>
                                    <span class="count-style">{{ Cart::count()}}</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




    @yield('main_content')


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
       $('.addCart').on('click', function(){
           let id = $(this).data('id');
           if(id) {
               $.ajax({
                   type:"GET",
                   url: "{{  url('/add/to/cart/') }}/"+id,
                   dataType:"json",
                   success:function(data) {
                    const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }
                   },  
               });
           } else {
               alert('danger');
           }

       });
   });

</script>




<!-- All JS is here
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('public/frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Popper JS -->
<script src="{{ asset('public/frontend/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('public/frontend/assets/js/bootstrap.min.js') }}"></script>

<!-- Revolution Slider JS -->
<script src="{{ asset('public/frontend/assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/revolution-active.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('public/frontend/assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('public/frontend/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('public/frontend/assets/js/ajax-mail.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>
<script src="{{ asset('public/frontend/assets/js/map.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>

<!-- =================Main script===============  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<!-- ===========Javascript code if needed=========== -->

<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>  



</body>

</html>

