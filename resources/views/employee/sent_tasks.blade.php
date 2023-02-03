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
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Controls</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                    @endphp
                    @foreach ($tasks as  $task)
                    @foreach (App\Models\Admin\Task::where('id',$task->task_id)->where('status_id',2)->get() as $key => $t)
                    <tr>
                        <td scope="row">{{ $i++ }}</td>
                        <td>{{ $t->description }}</td>
                        <td>{{ $t->status->name }}</td>
                        <td>
                            <a class="btn btn-warning m-2" href="{{ route('edit_status', $t->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                    </tbody>
                  </table>
                  <center>
                  <a  class="btn btn-primary mt-3" role="button" href="{{ route('dashboard') }}">Home</a>
                </center>
            </div>
        </div>
    </div>
    {{ $tasks->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
</html>

