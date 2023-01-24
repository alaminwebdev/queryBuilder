<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Query Builder - Basic</title>
    </head>

    <body>
        <h1>Query Builder</h1>
        <ul>
            <li>
                <a href="{{ route('getEmployees') }}">View Employee</a>
                
            </li>
            <br>
            <li>
                <a href="{{ route('getCity') }}">View City</a>
            </li>
        </ul>
    </body>

</html>
