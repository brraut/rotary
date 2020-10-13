<!DOCTYPE html>
<html lang="en">

    @include('frontend.includes.head')

<body>
@include('frontend.includes.navbar')
<div class="content">
   
    
    @if (request()->is('/'))
    @include('frontend.includes.slider')
    @endif


    @yield('content')

   

   @include('frontend.includes.footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{asset('frontend/js/aos.js')}}"></script>
@yield('js')
</body>
</html>