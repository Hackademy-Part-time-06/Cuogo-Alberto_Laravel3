<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Destinazione - {{$destinazione['city']}}</title>
</head>

<body>

    <div class="container d-flex justify-content-center">
        <header class="d-flex py-4 mb-4">
            <a href="{{route('index')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="img/AirTravel-logo.png" class="bi me-2" height="80rem">
                <span class="fs-1 fw-bold">AirTravel</span>
            </a>
        </header>
    </div>

    {{$destinazione['city']}}

    <div class="container-fluid d-flex justify-content-center bg-dark">
        <footer class="d-flex py-3 text-light">
            <span class="fs-4">AirTravel S.r.l.</span>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>