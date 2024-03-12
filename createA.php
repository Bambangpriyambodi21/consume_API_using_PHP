<!DOCTYPE html>
<html>
<head>
    <title>Form Pengiriman Data ke API</title>
</head>
<body>
    <h2>Form Pengiriman Data ke API</h2>
    <form action="create.php" method="post">
        <label for="email">Email Pelanggan:</label><br>
        <input type="text" id="email" name="email_pelanggan"><br>
        <label for="password">Password Pelanggan:</label><br>
        <input type="text" id="password" name="password_pelanggan"><br>
        <label for="nama">Nama Pelanggan:</label><br>
        <input type="text" id="nama" name="nama_pelanggan"><br>
        <label for="alamat">Alamat Pelanggan:</label><br>
        <input type="text" id="alamat" name="alamat_pelanggan"><br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>

