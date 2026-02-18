<html>
    <head>
        <title>
            Program Menghitung Besaran Angsuran Hutang
        </title>
    </head>

<body>
    <h2> Toko Pegadaian Syariah </h2>
    <h3> Program Menghitung Besaran Angsuran Hutang </h3>
    <form action="proses_hitung.php" method="POST">
        Besaran Pinjaman : 
        <input type="number" name="besar_pinjaman"><br><br>

        Lama Angsuran (Bulan) : 
        <input type="number" name="lama_angsuran"><br><br>

        Besar Bunga :
        <input type="number" name="besar_bunga"><br><br>

        Keterlambatan Bayar :
        <input type="number" name="keterlambatan"><br><br>
        
        <input type="submit" value="Kirim">
    </form>

</body>
</html>

