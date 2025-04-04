<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
</head>

<body>
    <h3>User dashboard</h3>
    @if (Auth::check())
        <p>Nama : {{ Auth::user()->name }}</p>
        <p>Email : {{ Auth::user()->email }}</p>
    @endif
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Log Out</button>
    </form>
</body>

</html>
