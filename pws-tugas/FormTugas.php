<!DOCTYPE html>
<html>
<head>
    <title>Form Parkir</title>
</head>
<body>
    <h1>Form Parkir</h1>
    <form action="ProsesTugas.php" method="POST">
        <label for="no_plat">No Plat:</label>
        <input type="text" name="no_plat" required><br><br>

        <label for="jenis_kendaraan">Jenis Kendaraan:</label>
        <select name="jenis_kendaraan" required>
            <option value="mobil">Mobil</option>
            <option value="motor">Motor</option>
            <option value="sepeda">Sepeda</option>
        </select><br><br>

        <label for="jam_masuk">Jam Masuk:</label>
        <input type="time" name="jam_masuk" required><br><br>

        <label for="jam_keluar">Jam Keluar:</label>
        <input type="time" name="jam_keluar" required><br><br>

        <input type="submit" name="hitung" value="Hitung Biaya Parkir">
    </form>
</body>
</html>
