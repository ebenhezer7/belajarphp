<?php
    require_once __DIR__ . './vendor/autoload.php' ;

    $mpdf = new \Mpdf\Mpdf();
    include ('./Input-config.php');
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, "SELECT * FROM datadiri ");
    while ($row = mysqli_fetch_array($data)){
        $tabledata .= "
            <tr>
             <td>".$row["nis"]."</td>
             <td>".$row["namalengkap"]."</td>
             <td>".$row["tanggal_lahir"]."</td>
             <td>".$row["nilai"]."</td>
        ";
        $no++;
    }
    $waktu_cetak = date('d M Y - H:i:s');
    $table =  "
            <h1>Laporan Data Diri</h1>
            <h6>waktu cetak : $waktu_cetak</h6>
          <table cellpadding=5 border=1 cellspacing=0>
                <tr>
                   <th>NIS</th> 
                   <th>Nama</th> 
                   <th>tanggal lahir</th> 
                   <th>nilai</th>  
                </tr>
                $tabledata
          </table>
    ";

    $mpdf->WriteHTML("$table");
    $mpdf->Output();

?>