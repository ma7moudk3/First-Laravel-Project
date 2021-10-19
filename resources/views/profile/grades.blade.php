<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    Grades Screen
    </h1>
    <br>
    <h1>
        {{$name}}
    </h1>

    @foreach($grades as $grade)
    <h1>{{$grade}}</h1>
    @endforeach

</body>
</html>