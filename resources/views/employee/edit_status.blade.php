<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>
    <center>
        <h2 class="mt-5">Edit Status</h2>
    </center>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 mx-auto mt-3">
                <div class="form-floating">
                    <textarea disabled class="form-control" id="floatingTextarea">{{ $task->description }}</textarea>
                    <label for="floatingTextarea">Task</label>
                </div>
                <form action="{{ route('status.update',$task->id) }}" method="POST">
                    @csrf
                    {{-- @method("PUT") --}}
                    <h6>Status</h6>
        <select name="status" >
            @foreach (App\Models\Admin\Status::where('id','>',1)->get() as $status )
                <option value="{{ $status->id }}" @if ($status->id == $task->status->id)
                    {{ 'selected' }}
                @endif>{{ $status->name }}</option>
            @endforeach
        </select>
                    <button type="submit" value="Edit Status" class="btn btn-primary mt-2">Edit</button>
                </form>
                <center>
                    <a class="btn btn-success" role="button" href="{{ route('dashboard') }}">Home</a>
                </center>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<html>
