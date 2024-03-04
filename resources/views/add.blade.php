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
    <div class=" add-component">
        <h1 class='mb-3'>Add Employee</h1>
        <form class="form" action="{{route('add')}}"  method='post'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" />
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" name="age" value="{{ old('age') }}" class="form-control @error('age') is-invalid @enderror" id="exampleInputPassword1" />
                @error('age')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3"
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputPassword1" />
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">City</label>
                <input type="text" name="city" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" id="exampleInputPassword1" />
                @error('city')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Department</label>
                <input type="text" name="department" value="{{ old('department') }}" class="form-control @error('department') is-invalid @enderror" id="exampleInputPassword1" />
                @error('department')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary m-auto">Add</button>
        </form>
    </div>     
</body>
</html>