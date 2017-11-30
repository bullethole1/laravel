<!doctype html>
<html lang="<?= app()->getLocale() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>

    </head>
    <body>

    <form action="<?= action('ProductController@store') ?>" method="post">
        <?= csrf_field() ?>
        entity_id:<br>
        <input type="text" value="entity_id" name="entity_id"><br>
        status:<br>
        <input type="text" value="status" name="status"><br>
        name:<br>
        <input type="text" name="name" value="name"><br><br>
        <input type="submit" value="Submit">
    </form>

    </body>
</html>