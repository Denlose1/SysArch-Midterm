<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg2.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="container mt-5 text-center">
    <h2 class="mb-4 text-white">Welcome to the Management System</h2>
    <div class="list-group w-50 mx-auto">
        <a href="{{ route('colleges.index') }}" class="list-group-item list-group-item-action">Manage Colleges</a>
        <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-action">Manage Departments</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>