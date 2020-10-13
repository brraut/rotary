<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
		/>
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
		/>
   

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    @yield('css')
</head>