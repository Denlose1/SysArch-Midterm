<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg3.avif') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="container mt-5">
    <h2 class="text-center mb-4 text-white">Departments</h2>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('departments.create') }}" class="btn btn-primary">Add New Department</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back to Management System</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Department Code</th>
                <th>College</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td>{{ $department->department_id }}</td>
                <td>{{ $department->department_name }}</td>
                <td>{{ $department->department_code }}</td>
                <td>{{ $department->college->college_name }}</td>
                <td>
                    <a href="{{ route('departments.edit', $department->department_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('departments.destroy', $department->department_id) }}" method="POST" class="d-inline">
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