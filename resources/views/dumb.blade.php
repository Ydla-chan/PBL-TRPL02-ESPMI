<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>User Dashboard</h1>
    @auth
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ auth()->user()->id }}</td>
            <td>{{ auth()->user()->nama_lengkap }}</td>
            <td>{{ auth()->user()->email }}</td>
        </tr>
    </table>
    @else
    <p>Please log in to view the dashboard.</p>
    @endauth
</body>
</html>
