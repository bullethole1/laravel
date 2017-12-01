<!doctype html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit</title>

    </head>
    <body>
    <h1>Edit gruop: {{$group->customer_group_code}}</h1>
    <form action="{{ action('GroupController@update', $group)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        customer_group_id:<br>
        <input type="text" value="{{ $group->customer_group_id }}" name="customer_group_id"><br>
        customer_group_code:<br>
        <input type="text" value="{{ $group->customer_group_code }}" name="customer_group_code"><br>
        tax_class_id:<br>
        <input type="text" value="{{ $group->tax_class_id }}" name="tax_class_id"><br><br>
        <input type="submit" value="Submit">
    </form>

    </body>
</html>