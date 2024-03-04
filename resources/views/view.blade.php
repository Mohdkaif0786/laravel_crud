<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="list-component">
        <h1>Employee List</h1>
        <a href="/addpage"><button class="btn btn-primary text-white add-btn" >Add Employee</button></a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Age</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $key=>$emp)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$emp->name}}</td>
                    <td>{{$emp->age}}</td>
                    <td>
                        <a href="{{route('singledata',$emp->id)}}"><button class="btn btn-success ml m-none">View</button></a>
                        <a href="{{route('delete',$emp->id)}}"><button class="btn btn-danger ml"> Delete</button></a>
                        <a href="{{route('updatepage',$emp->id)}}"><button class="btn btn-primary ml">Update</button></a>
                    </td>
                </tr>
                @endforeach  
            </tbody>
        </table>
        <div class="mt-5">{{$employees->links()}}</div>
    </div>
     {{-- {{print_r($employee)}} --}}
</body>
</html>
