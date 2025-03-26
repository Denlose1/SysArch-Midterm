<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg2.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .table-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="container mt-5">
    <div class="table-container p-4">
        <h2 class="text-center mb-4">Departments</h2>
        <table class="table table-hover table-striped text-center">
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
        <div class="d-flex justify-content-between mt-3">
            <a href="{{ route('departments.create') }}" class="btn btn-primary">Add New Department</a>
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to School System</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>