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
            <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                <span style="font-family: Tahoma; font-size: 18px; margin: 2px 2px 2px 2px;">
                    <a href="/">{{ config('app.name', 'Laravel') }}</a>
                </span>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="padding: 2px 2px 2px 2px;">
                <a href="tel:{{ config('app.tel_num.inquiry') }}"><img src="img/icon/telephone_10764.png" style="width: 30px; height: 30px;">お問い合わせ</a>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="padding: 2px 2px 2px 2px;">
                <a href="/calendar" class="btn btn-primary">予約</a>
            </div>
        </div>
@yield('content')
        <footer class="v-footer v-sheet theme--light v-footer--fixed" data-booted="true" style="left: 0px; right: 0px; bottom: 0px;position: fixed;background-color: whitesmoke;"><span>© 2025</span></footer>
    </div>
    <script>

    </script>
    <style>

    </style>
</body>
</html>
