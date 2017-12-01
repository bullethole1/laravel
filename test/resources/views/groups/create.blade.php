<!doctype html>
<html lang="<?= app()->getLocale() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create</title>

    </head>
    <body>

    <form action="{{action('GroupController@store')}}" method="post">
         {{csrf_field()}}
            customer_group_id:<br>
        <input type="text" value="customer_group_id" name="customer_group_id"><br>
            customer_group_code:<br>
        <input type="text" value="customer_group_code" name="customer_group_code"><br>
            tax_class_id:<br>
        <input type="text" name="tax_class_id" value="tax_class_id"><br><br>
        <input type="submit" value="Submit">
    </form>

    </body>
</html>