<!DOCTYPE html>
<html lang="en">
<head>
    @include('forms.includes.AppStyle')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Forms</title>
</head>
<body>


    <div class="container">
        @yield('main_content')
    </div>
    @include('forms.includes.AppJS')

</body>

</html>