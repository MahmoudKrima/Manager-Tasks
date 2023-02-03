<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <center>
        <h2 class="mt-5">Create New Task</h2>
    </center>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 mx-auto mt-3">
            <form action="{{ route('task.store') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                  <label>Description</label>
                  <textarea type="description" class="form-control mt-2" name="description" >{{ old('description') }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <h6>Employees</h6>
                    @foreach ($users as $user)
                    <input type="checkbox"  name="employees[]" value="{{ $user->id }}" multiple>{{ $user->name}}
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary mt-2">Create Task</button>
            </form>
            <center>
            <a class="btn btn-success" role="button" href="{{ route('task.index') }}">All Tasks</a>
        </center>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


