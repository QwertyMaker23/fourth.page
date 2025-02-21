<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $hp = isset($_POST['hp']) ? $_POST['hp'] : ''; 

    echo "<h2>Data yang Dikirim:</h2>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Alamat: " . htmlspecialchars($alamat) . "<br>";
    echo "Nomor HP: " . htmlspecialchars($hp) . "<br>";
} else {
    echo "Form belum disubmit.";
}
?>
