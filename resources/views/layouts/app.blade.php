<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        footer {
            background-color: #f8f9fa;
            padding: 70px 0px 0 0px;
            color: #6c757d;
            margin: 0px 30px;
        }

        .footer h5 {
            color: #212529;
        }

        .footer a {
            text-decoration: none;
            color: #6c757d;
        }

        .footer a:hover {
            color: #007bff;
        }

        .footer .social-icons a {
            font-size: 1.2rem;
            margin: 0 10px;
            color: #6c757d;
        }

        .footer .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    @include('partial.nav') <!-- Navigation Bar -->

    <div class="content">
        @yield('content') <!-- Main Content -->
    </div>

    @include('partial.footer') <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>