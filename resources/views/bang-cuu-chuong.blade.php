<!doctype html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bảng cửu chương</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="p-4">
        <h1>Bảng cửu chương</h1>

        @if (! $isValid)
            <div class="alert alert-danger">
                Giá trị "{{ $n }}" không hợp lệ. Vui lòng nhập số.
            </div>
        @else
            <h2>Bảng cửu chương {{ $number }}</h2>
            <ul class="list-group">
                @for ($i = 1; $i <= 10; $i++)
                    <li class="list-group-item">
                        {{ $number }} x {{ $i }} = {{ $number * $i }}
                    </li>
                @endfor
            </ul>
        @endif
    </body>
</html>
