<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="http://localhost/PWL_POS/public/user/tambah_simpan">
            {{ csrf_field() }}

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukan Username">
            <br>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukan Nama">
            <br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan Password">
            <br>

            <label for="level_id">Level ID</label>
            <input type="number" id="level_id" name="level_id" placeholder="Masukan ID Level">
            <br><br>

            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
</body>
</html>
