<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Data User</title>
</head>

<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            {{-- <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th> --}}
        </tr>

        <!-- JS3 -->
        {{-- @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
        <td>{{ $d->username }}</td>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->level_id }}</td>
        </tr>
        @endforeach --}}

        <!-- JS4: Praktikum 2.1 -->
        {{-- <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr> --}}

        {{-- JS4: Praktikum 2.3 --}}
        <tr> 
            <th>Jumlah Pengguna</th> 
        </tr> 
        <tr> 
            <td>{{ $data }}</td> 
        </tr> 
    </table>
</body>