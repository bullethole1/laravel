<!doctype html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit</title>

    </head>
    <body>
    <h1>Edit produkt: {{$product->name}}</h1>
    <form action="{{ action('ProductController@update', $product)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        entity_id:<br>
        <input type="text" value="{{ $product->entity_id }}" name="entity_id"><br>
        status:<br>
        <input type="text" value="{{ $product->status }}" name="status"><br>
        name:<br>
        <input type="text" value="{{ $product->name }}" name="name"><br><br>
        <input type="submit" value="Submit">
    </form>

    </body>
</html>