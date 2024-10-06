<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .sidebar {
            background-color: #4b555f;
        }
        .sidebar a {
            color: #daeded;
            display: block;
        }
        .sidebar a:hover {
            background-color: #c69595;
            border-radius: 4px;
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
        }
        h5 {
            color: #daeded;
        }
        h4 {
        color: #e6e2e2;
        }
        h3 {
        color: #e6e2e2;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                @yield('sidebar')
            </div>
            <!-- Main content -->
            <div class="col-md-9 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
