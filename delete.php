<?php
// Skrip PHP untuk mengirimkan data ke API (send_data.php)

// Periksa apakah ada data yang dikirimkan dari formulir
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data JSON yang ingin dikirim
    $dataToSend = array(
      'id_pelanggan' => $_POST['id_pelanggan']
    );

    // Konversi data ke format JSON
    $jsonData = json_encode($dataToSend);

    // URL API tujuan
    $url = 'http://localhost:8082/pelanggan/'.$_POST['id_pelanggan']; // Ganti dengan URL API yang sesuai

    // Inisialisasi cURL
    $ch = curl_init($url);

    // Setel opsi curl untuk mengirim permintaan DELETE
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, $jsonData);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Eksekusi permintaan
    curl_exec($ch);

    echo "Data Deleted";
    // Cek apakah ada kesalahan
    // if($response === false) {
    //     echo 'Error: ' . curl_error($ch);
    // } else {
    //     echo 'Data berhasil dikirim: ' . $response;
    // }

    // Tutup koneksi cURL
    curl_close($ch);
}
?>
