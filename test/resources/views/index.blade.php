<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

</head>
<body>
<table>

    <tr>
        <th>Entity id</th>
        <th>Type id</th>
        <th>Sku</th>
        <th>Name</th>
        <th>Amount package</th>
        <th>Price</th>
        <th>status</th>
        <th>In stock</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->entity_id}}</td>
            <td>{{$product->type_id}}</td>
            <td>{{$product->sku}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->amount_package}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->status}}</td>
            <td>{{$product->is_in_stock}}</td>
            <td><a href="{{action('ProductController@edit', $product->entity_id)}}">Edit</a></td>
            <td>
                <form action="{{action('ProductController@destroy', $product->entity_id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field("DELETE") }}
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>