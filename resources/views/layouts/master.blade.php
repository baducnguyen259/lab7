<!doctype html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <header class="py-3 border-bottom">
            <div class="container d-flex justify-content-between">
                <strong>Lab 7</strong>
                <nav>
                    <a class="me-3" href="/home">Trang chủ</a>
                    <a href="/contact">Liên hệ</a>
                </nav>
            </div>
        </header>

        <main class="container my-4">
            @yield('content')
        </main>

        <footer class="py-3 border-top">
            <div class="container text-center">
                &copy; 2026
            </div>
        </footer>
    </body>
</html>
