<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">nomor induk siswa</label>
    <input type="number" name="nis" placeholder="12000123"/> <br>

    <label for="nama">Nama lengkap</label>
    <input type="text" name="namalengkap" placeholder="Ex. david lufti"/> <br>
    
    <label for="tanggal_lahir">tanggal lahir</label>
    <input type="date" name="tanggal_lahir"/> <br>

    <label for="nilai">nilai</label>
    <input type="number" name="nilai" placeholder="12"/> <br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    <a href="input-datadiri.php" class="href">kembali</a>
    
</form>
<?php
    if( isset ($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $nama = $_POST["namalengkap"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];
    
    //create menambahkan ke database
    $query ="
        INSERT INTO datadirirpl VALUES ('$nis', '$nama', '$tanggal_lahir', '$nilai');
    ";
    include ('./input-config.php');
    $insert = mysqli_query ($mysqli, $query);

    if ($insert){
        echo"
            <script>
                alert ('data berhasil ditambahkan');
                window.location='input-datadiri.php;
            </script>
        ";
    }
    }
?>
