<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel-Boolean Students</title>
</head>
<body>
    <div class="home-wrap">
        <div class="wrap-title">
            <img class="logo" src="images/logo-boolean.png" alt="logo Boolean">
            <h1>Students List</h1>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Date of Birth</th>
            </tr>
            @foreach ($Students as $student)
                <tr>
                    <td>{{$student -> name}}</td>
                    <td>{{$student -> lastname}}</td>
                    <td class="gender-td">{{$student -> gender}}</td>
                    <td>{{$student -> date_of_birth}}</td>
                </tr>
            @endforeach
    </div>
</body>
</html>

