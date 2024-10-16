<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
</head>

<body>
    <center>
        <h1>User Index</h1>
        <a href="{{route ('user.create')}}"><button>Add Data</button></a>
        <table border="1">
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Aksi</th>

                </tr>
                @foreach ($user as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->username }}</td>
                        <td style="-webkit-text-security: disc; text-security: disc;">{{ $k->password }}</td>
                        <td>{{ $k->email }}</td>
                        <td>
                            <button><a href="{{ route('user.edit', $k->id) }}">Edit</a></button>
                            <form action="{{ route('user.destroy', $k->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>

                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>

</html>
