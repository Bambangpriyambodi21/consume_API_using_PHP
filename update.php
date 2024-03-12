<?php
// Skrip PHP untuk mengirimkan data ke API (send_data.php)

// Periksa apakah ada data yang dikirimkan dari formulir
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data JSON yang ingin dikirim
    $dataToSend = array(
      'id_pelanggan' => $_POST['id_pelanggan'],
      'email_pelanggan' => $_POST['email_pelanggan'],
      'password_pelanggan' => $_POST['password_pelanggan'],
      'nama_pelanggan' => $_POST['nama_pelanggan'],
      'alamat_pelanggan' => $_POST['alamat_pelanggan']
    );

    // Konversi data ke format JSON
    $jsonData = json_encode($dataToSend);

    // URL API tujuan
    $url = 'http://localhost:8082/pelanggan'; // Ganti dengan URL API yang sesuai

    // Inisialisasi cURL
    $ch = curl_init($url);

    // Set opsi cURL untuk mengirim data dengan metode POST
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    // Set header untuk memberitahu bahwa kita mengirim data JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Eksekusi permintaan cURL
    $response = curl_exec($ch);

    // Cek apakah ada kesalahan
    if($response === false) {
        echo 'Error: ' . curl_error($ch);
    } else {
        echo 'Data berhasil dikirim: ' . $response;
    }

    // Tutup koneksi cURL
    curl_close($ch);
}
?>
