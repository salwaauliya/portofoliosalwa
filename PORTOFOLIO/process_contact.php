<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validasi input sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Email tujuan (emailmu)
        $to = "salwaaelia@gmail.com";
        $subject = "Pesan dari $name";
        $body = "Nama: $name\nEmail: $email\nPesan:\n$message";
        $headers = "From: $email";

        // Kirim email
        if (mail($to, $subject, $body, $headers)) {
            echo "Pesan berhasil dikirim!";
        } else {
            echo "Pengiriman pesan gagal.";
        }
    } else {
        echo "Semua kolom harus diisi.";
    }
}
?>
