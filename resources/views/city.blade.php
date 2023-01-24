<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Query Builder - Basic</title>
    </head>

    <body>
        <h1>All City</h1>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <br>
            <li>
                <a href="{{ route('getEmployees') }}">View Employee</a>
            </li>
        </ul>

        @foreach ($data as $city)
        <h3>City ID : {{ $city->cid }}</h3>
        <ul>
            <li>Name is : {{ $city->cityname }}</li>
        </ul>
        @endforeach

    </body>

</html>
