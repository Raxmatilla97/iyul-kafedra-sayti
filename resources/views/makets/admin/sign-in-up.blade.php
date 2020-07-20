
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ __('Tasviriy sa\'ant kafedrasi web sayti')}}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{('admin/assets/styles/css/themes/lite-purple.min.css')}}">
</head>

<body>

     @yield('content')

    <script src="{{ ('admin/assets/js/common-bundle-script.js') }}"></script>

    <script src="{{ ('admin/assets/js/script.js') }}"></script>
</body>

</html>
