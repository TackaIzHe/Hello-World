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
            <th>Бан</th>
        </tr>
    @foreach($users as $key => $user)
    <tr>
        <td> {{ $key + 1 }}</td>
        <td> {{ $user['name'] }} </td>
        <td> {{ $user['surname'] }} </td>
        @if( $user['banned'] == true )
            <td> Забанен </td>
        @else
            <td>Не забанен</td>
        @endif
        </tr>
    @endforeach
    </table>

        @foreach($strings as $string)
            <input type="text" value='{{ $string }}'/>
        @endforeach

        <select>

            @foreach($strings as $string)
            <option> {{$string}} </option>
            @endforeach
        </select>

        @foreach($day as $d)
        @if($d == 5)
            <h1>{{$d}}</h1>
        @endif
        @endforeach


</body>
</html>