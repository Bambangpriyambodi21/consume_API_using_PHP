<?php

$data = file_get_contents("http://localhost:8082/pelanggan");
// echo $data;
$pelanggan = json_decode($data, true);
echo "
    <h1>Data Pelanggan</h1>
        <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>";
        
        foreach($pelanggan as $p){
echo "
        <tr>
            <td>".$p['id_pelanggan']."</td>
            <td>".$p['email_pelanggan']."</td>
            <td>".$p['password_pelanggan']."</td>
            <td>".$p['nama_pelanggan']."</td>
            <td>".$p['alamat_pelanggan']."</td>
        </tr>";
    }
echo "</table>";
    
        
    
?>

