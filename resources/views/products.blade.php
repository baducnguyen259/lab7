<!doctype html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Danh sách sản phẩm</title>
        <style>
            table { border-collapse: collapse; width: 100%; }
            th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
            .price-vip { color: #c0392b; font-weight: bold; }
        </style>
    </head>
    <body>
        <h1>Danh sách sản phẩm</h1>

        <table>
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['name'] }}</td>
                        <td>
                            @if ($product['price'] > 10000000)
                                <span class="price-vip">
                                    {{ number_format($product['price']) }} (Vip)
                                </span>
                            @else
                                {{ number_format($product['price']) }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
