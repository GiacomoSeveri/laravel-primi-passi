<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>{{ $name  }}</title>
</head>

<body>
    <div class="container d-flex justify-content-between align-items-center mt-3">
        <h1>{{ $title }}</h1>
        <ul class="list-unstyled d-flex justify-content-between align-items-center">
            @foreach($links as $link)
            <li class="mx-3">
                <a href="/{{$link}}">{{ $link }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>