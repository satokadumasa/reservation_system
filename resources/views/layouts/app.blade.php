<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js"></script>
</head>
<body class="font-sans antialiased">
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-5 col-xl-5 col-xxl-5">
                <span style="font-family: Tahoma; font-size: 18px;">
                    <a href="/">{{ config('app.name', 'Laravel') }}</a>
                </span>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-7 col-xl-7 col-xxl-7">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <a href="tel:{{ config('app.tel_num.inquiry') }}"><img src="img/icon/telephone_10764.png" style="width: 30px; height: 30px;">お問い合わせ</a>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <a href="/calendar" class="btn btn-primary">予約</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@yield('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span>© 2025</span>
            </div>
        </div>
    </div>
    <script>

    </script>
    <style>

    </style>
</body>
</html>
