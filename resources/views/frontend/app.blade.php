<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Belanja</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url ('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url ('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    @include('frontend._partials.header')
    <!-- END HEADER -->

    <!-- KONTEN -->
    @yield('content')
    <!-- END KONTEN -->

    <!-- FOOTER -->
    @include('frontend._partials.footer')
    <!-- END FOOTER -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url ('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url ('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url ('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ url ('assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url ('assets/js/main.js') }}"></script>
</body>

</html>