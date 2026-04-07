<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
    @foreach($users as $key => $user)
        @if( $user['salary'] > 2000 )
        <tr>
            <td> {{ $key + 1 }}</td>
            <td> {{ $user['name'] }} </td>
            <td> {{ $user['surname'] }} </td>
            <td> {{ $user['salary'] }} </td>
        </tr>
        @endif
    @endforeach
    </table>

</body>
</html>