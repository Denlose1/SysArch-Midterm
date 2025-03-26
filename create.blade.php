<!DOCTYPE html>
<html>
<head>
    <title>Add College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg3.avif') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="container mt-5">
    <h2 class="text-center mb-4 text-white">Add College</h2>
    <div class="card p-4 shadow-sm">
        <form action="{{ route('colleges.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">College ID:</label>
                <input type="text" name="college_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">College Name:</label>
                <input type="text" name="college_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">College Code:</label>
                <input type="text" name="college_code" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Back to Colleges</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>