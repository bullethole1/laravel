<!doctype html>
<html lang="app()->getLocale()">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show</title>

    </head>
    <body>

    <div class="jumbotron text-center">
        <h2>{{ $group->customer_group_code }}</h2>
        <p>
            <strong>customer_group_id:</strong> {{ $group->customer_group_id }}<br>
            <strong>customer_group_code:</strong> {{ $group->customer_group_code }}<br>
            <strong>tax_class_id:</strong> {{ $group->tax_class_id }}<br>
        </p>
    </div>

    </body>
</html>