<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Query Builder - Basic</title>
    </head>

    <body>
        <h1>All Employee</h1>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
        </ul>
        
        <h3>Employee ID : {{ $employee->id }}</h3>
        <ul>
            <li>Name is : {{ $employee->name }}</li>
            <li>Age is : {{ $employee->age }}</li>
            <li>Department is : {{ $employee->department }}</li>
            <li>Salary is : {{ $employee->salary }}</li>
        </ul>
    </body>

</html>
