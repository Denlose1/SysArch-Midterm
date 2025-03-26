<!DOCTYPE html>
<html>
<head>
    <title>Colleges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg3.avif') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="container mt-5">
    <h2 class="text-center mb-4 text-white">Colleges</h2>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('colleges.create') }}" class="btn btn-primary">Add New College</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back to Management System</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>College ID</th>
                <th>College Name</th>
                <th>College Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colleges as $college)
            <tr>
                <td>{{ $college->college_id }}</td>
                <td>{{ $college->college_name }}</td>
                <td>{{ $college->college_code }}</td>
                <td>
                    <a href="{{ route('colleges.edit', $college->college_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('colleges.destroy', $college->college_id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>