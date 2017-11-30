<!doctype html>
<html lang="<?= app()->getLocale() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show</title>

    </head>
    <body>

    <div class="jumbotron text-center">
        <h2>{{ $product->name }}</h2>
        <p>
            <strong>sku:</strong> {{ $product->sku }}<br>
        </p>
    </div>

    </body>
</html>