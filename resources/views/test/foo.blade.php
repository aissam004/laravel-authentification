<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    Foo page


    <h4>
        lazem tkoun authentifié bech tchouf lta7t
    </h5>
    @auth
    <p>
        {{Auth::user()->id}}
    </p>
    <p>
        {{Auth::user()->name}}
    </p>
    @endauth


</body>
</html>
