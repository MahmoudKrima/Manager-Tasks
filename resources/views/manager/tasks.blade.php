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
            <div class="col-8 mx-auto mt-5">
                <center>
                    <a  class="btn btn-primary mt-3" role="button" href="{{ route('task.create') }}">Add New Task</a>
                  </center>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Controls</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tasks as $key => $task)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->status->name }}</td>
                            <td class="d-flex">
                                <a class="btn btn-warning m-2 "  href="{{ route('task.edit', $task->id) }}">Edit</a>
                                <form action="{{ route('task.destroy', $task->id) }}" method="POST" class="m-2" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mr-2" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        No Tasks
                    @endforelse
                    </tbody>
                  </table>
                  <center>
                  <a  class="btn btn-primary mt-3" role="button" href="{{ route('admin_dashboard') }}">Home</a>
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


