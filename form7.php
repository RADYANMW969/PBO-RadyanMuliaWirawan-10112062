<!DOCTYPE html>
<html>
<head>
    <title>Input Karyawan</title>

    <script>
        function tampilkanField() {
            var jenis = document.getElementById("jenis").value;
            var fieldPegawai = document.getElementById("fieldPegawai");

            if (jenis == "pegawai") {
                fieldPegawai.style.display = "block";
            } else {
                fieldPegawai.style.display = "none";
            }
        }
    </script>
</head>
<body>

<h2>Form Input Karyawan</h2>

<form method="POST" action="proses7.php">

    Jenis Karyawan:
    <select name="jenis" id="jenis" onchange="tampilkanField()">
        <option value="programmer">Programmer</option>
        <option value="direktur">Direktur</option>
        <option value="pegawai">Pegawai Mingguan</option>
    </select><br><br>

    Nama:
    <input type="text" name="nama"><br><br>

    Gaji Pokok:
    <input type="number" name="gaji"><br><br>

    Lama Kerja (tahun):
    <input type="number" name="lama"><br><br>

    <!-- FIELD KHUSUS PEGAWAI -->
    <div id="fieldPegawai" style="display:none;">
        Jumlah Penjualan:
        <input type="number" name="jual"><br><br>

        Target Penjualan:
        <input type="number" name="target"><br><br>

        Harga Barang:
        <input type="number" name="harga"><br><br>
    </div>

    <button type="submit">Hitung Gaji</button>

</form>

</body>
</html>
