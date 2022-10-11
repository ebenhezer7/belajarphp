<?php
    if(isset($_GET["nis"])) {
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM datadirirpl WHERE nis = '$nis';";
        include('./input-config.php');
        $query =  mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="nis">nomor induk siswa</label>
    <input value="<?php echo $row["nis"]?>" readonly type="number" name="nis" placeholder="12000123"/> <br>

    <label for="nama">Nama lengkap</label>
    <input value="<?php echo $row["namalengkap"]?>" type="text" name="namalengkap" placeholder="Ex. david lufti"/> <br>
    
    <label for="tanggal_lahir">tanggal lahir</label>
    <input value="<?php echo $row["tanggal_lahir"]?>" type="date" name="tanggal_lahir"/> <br>

    <label for="nilai">nilai</label>
    <input value="<?php echo $row["nilai"]?>" type="number" name="nilai" placeholder="12"/> <br>

    <input type="submit" name="simpan" value="edit data"/>
    <a href="input-datadiri.php" class="href">kembali</a>
    
</form>

<?php 
    if (isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama lengkap"];
        $tanggal_lahir = $_POST["tanggal lahir"];
        $nilai = $_POST["nilai"];
    

    $query ="
        <script>
        
        </script>
    ";
    }

?>