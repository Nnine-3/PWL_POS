<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="http://localhost/PWL_POS/public/user">Kembali</a>
    <br><br>

    <form method="post" action="http://localhost/PWL_POS/public/user/ubah_simpan/{{ $data->user_id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukan Username" value="{{ $data->username }}">
        <br>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukan Nama" value="{{ $data->username }}">
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukan Password" value="{{ $data->password }}">
        <br>

        <label for="level_id">Level ID</label>
        <input type="number" id="level_id" name="level_id" placeholder="Masukan ID Level" value="{{ $data->level_id }}">
        <br><br>

        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>
</html>
