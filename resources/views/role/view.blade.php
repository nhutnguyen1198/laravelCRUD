<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <title>Role Details</title>

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        inset: 0;
    }

    nav {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin: 0 10px;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    .no-data {
        text-align: center;
        color: #888;
        font-size: 16px;
        margin: 20px 0;
    }

    footer {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #555;
    }

    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        th,
        td {
            padding: 8px;
        }
    }

    footer {
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
    }

    nav {
        position: absolute;
        top: 0;
        border: 2px solid #000;
        width: 98%;
        height: 5%;
        justify-content: center;
        display: flex;
        background-color: #f4f4f4;
    }

    ul {
        list-style-type: none;
        margin: 10px;
        padding: 0;
        display: flex
    }

    li {
        display: flex;
        white-space: nowrap;
        margin: 0 5px;
    }

    footer {
        position: absolute;
        bottom: 0;
        border: 2px solid #000;
        width: 98%;
        height: 5%;
    }

    a {
        text-decoration-line: none;
        margin-right: 10px;
        margin-left: 35%;
        color: #000;
    }

    .a {
        margin-top: 40px;
    }
</style>

<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="{{ route('login') }}">Đăng xuất</a></li>
        </ul>
    </nav>

    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
            </tr>
        </table>

        <h2>Danh sách user có quyền là {{ $role->name }}</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @if($users && $users->count())
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="no-data">Không có người dùng nào thuộc vai trò này.</td>
                </tr>
            @endif
        </table>
    </div>

    <footer>
        <p>Minh Nhựt @04/2025</p>
    </footer>
</body>

</html>