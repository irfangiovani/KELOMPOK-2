<!DOCTYPE html>
<html>
<head>
    <title>pengembalian</title>
</head>
<body>
    <form action="contact.php" method="POST">
        <fieldset>
        <legend>pengembelian</legend>
        <p>
            <label>ID Kembali:</label>
            <input type="text" name="nama" placeholder="id kembali..." />
        </p>
        <p>
        <label>ID Pinjam     :</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
        <label>Tgl Pngembalian:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
        <label>Terlambat:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
        <label> Denda:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p>
        <p>
            <label>Biografi:</label>
            <textarea name="biografi"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>