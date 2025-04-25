<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Order Details</title>
</head>
<style>
    /* Reset and Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* Navigation */
    nav {
        background-color: #fff;
        border-bottom: 2px solid #000;
        padding: 10px 0;
        width: 100%;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    nav li {
        margin: 0 15px;
    }

    nav a {
        text-decoration: none;
        color: #000;
        font-weight: 500;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #007bff;
    }

    /* Header (Danh sách user) */
    .dsuser {
        text-align: center;
        margin: 30px 0;
        font-size: 2rem;
        font-weight: bold;
        color: #000;
    }

    /* Table */
    table {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto 20px;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: rgb(120, 121, 123);
        color: #fff;
        font-weight: 600;
    }

    td {
        background-color: #fff;
    }

    td a {
        text-decoration: none;
        color: rgb(120, 121, 123);
        margin: 0 5px;
    }

    td a:hover {
        text-decoration: underline;
    }

    .cot1 {
        width: 60px;
    }

    .cot4 {
        width: 250px;
    }

    td ul {
        list-style: none;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    td ul li {
        display: inline;
    }

    /* Pagination */
    .pag {
        display: flex;
        justify-content: center;
        margin: 20px 0;
        padding: 10px;
    }

    .pag .page-item {
        margin: 0 5px;
    }

    .pag .page-link {
        padding: 8px 12px;
        border: 1px solid #000;
        border-radius: 4px;
        color: #000;
        background-color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-family: 'Arial', sans-serif;
        transition: all 0.3s;
    }

    .pag .page-link:hover {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pag .page-item.active .page-link {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
        cursor: default;
    }

    .pag .page-item.disabled .page-link {
        color: #ccc;
        border-color: #ccc;
        background-color: #f4f4f4;
        cursor: not-allowed;
    }

    /* Footer */
    footer {
        background-color: #fff;
        border-top: 2px solid #000;
        padding: 10px 0;
        text-align: center;
        font-size: 14px;
        color: #666;
        width: 100%;
        margin-top: auto;
    }

    footer p {
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        table {
            width: 95%;
        }

        th,
        td {
            padding: 8px;
            font-size: 14px;
        }

        .cot1 {
            width: 40px;
        }

        .cot4 {
            width: 200px;
        }

        .dsuser {
            font-size: 1.5rem;
            margin: 20px 0;
        }

        nav li {
            margin: 0 10px;
        }

        .pag .page-link {
            padding: 6px 10px;
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        table {
            font-size: 12px;
        }

        th,
        td {
            padding: 6px;
        }

        .cot4 {
            width: 150px;
        }

        td ul {
            flex-direction: column;
            gap: 5px;
        }
    }
</style>

<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="{{ route('login') }}">Đăng Xuất</a></li>
        </ul>
    </nav>
    <table>
        <thead>
            <tr>
                <th>ID đơn hàng</th>
                <th>sản phẩm</th>
                <th>Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $orders->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $orders->created_at }}</td>
                </tr>
            @endforeach         
        </tbody>
    </table>
    <footer>
        <p>Minh Nhựt @04/2025</p>
    </footer>
</body>

</html>