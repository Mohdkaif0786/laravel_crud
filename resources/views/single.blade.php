<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    @if ($employee)
    <div class="list-component">
        <h1>Employee List</h1>
        <a href={{route("home")}}><button class="btn btn-primary text-white add-btn">Back</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Age</th>
                    <th scope="col">Employee Email</th>
                    <th scope="col">Employee City</th>
                    <th scope="col">Employee Department</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee as $key=>$emp)
                <tr>
                    <th>{{$emp->id}}</th>
                    <td>{{$emp->name}}</td>
                    <td>{{$emp->age}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->city}}</td>
                    <td>{{$emp->department&& 'hello'}}</td>
                </tr>
                @endforeach  
            </tbody>
        </table>
        @else
        {!!"<script>window.location.href = '/';</script>"!!}
    @endif
        
</body>
</html>