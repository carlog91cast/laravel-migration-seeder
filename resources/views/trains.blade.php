<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Trains</h1>
    <div class="d-flex justify-content-center">
        <ul>
            @foreach($trains as $train)
            <li>{{$train->company}}</li>
            @endforeach
        </ul>
        <ul>
            @foreach($trains as $train)
            <li>{{$train->departure_gate}}</li>
            @endforeach
        </ul>
        <ul>
            @foreach($trains as $train)
            <li>{{$train->arrival_gate}}</li>
            @endforeach
        </ul>
        <ul>
            @foreach($trains as $train)
            <li>{{$train->code}}</li>
            @endforeach
        </ul>
    </div>


</body>

</html>