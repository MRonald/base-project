<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container align-center">
        <div class="col-12 border mt-5 p-5">
            <h1>Teste</h1>
            <button class="btn btn-lg btn-orange text-white">Bootstrap Ok</button>
        </div>
    </div>
    <script>
        fetch('{{ route("apis") }}').then(
            (resp) => resp.json()
        ).then(
            (res) => {
                const teste = res;
                console.log(teste);
            }
        );
    </script>
</body>
</html>
