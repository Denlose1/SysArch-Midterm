<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - School System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/bg1.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .menu-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="menu-card text-center p-4 w-50">
        <h2 class="mb-4 text-dark">School System</h2>
        <div class="list-group">
            <a href="{{ route('colleges.index') }}" class="list-group-item list-group-item-action">Colleges</a>
            <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-action">Departments</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>