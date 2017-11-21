<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customers</title>

    </head>
    <body>

    <ul>
        <?php
            foreach ($customers as $customer){
                echo json_encode($customer, true);
                header('Application/json');
            }
        ?>
    </ul>
    </body>
</html>
