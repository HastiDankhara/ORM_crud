<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>User Detail</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">User's Detail</h1>
        <table class="table table-bordered w-50">
            <tr>
                <th>Name:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>City:</th>
                <td>{{ $user->city }}</td>
            </tr>
            <tr>
                <th>Age:</th>
                <td>{{ $user->age }}</td>
            </tr>
        </table>
        <a href="{{ route('crud.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
</body>
</html>
