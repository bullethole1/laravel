<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Groups</title>

</head>
<body>
<table>

    <tr>
        <th>Customer group id</th>
        <th>Customer group code</th>
        <th>Tax class id</th>
    </tr>
    @foreach($groups as $group)
        <tr>
            <td>{{$group->customer_group_id}}</td>
            <td>{{$group->customer_group_code}}</td>
            <td>{{$group->tax_class_id}}</td>
            <td><a href="{{action('GroupController@edit', $group->customer_group_id)}}">Edit</a></td>
            <td>
                <form action="{{action('GroupController@destroy', $group->customer_group_id)}}" method="POST">
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