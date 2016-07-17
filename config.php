<?php  
    // Konfigurasi database
    $host = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";

    try {
      // buat koneksi dengan database
      $dbh = new PDO("mysql:host={$host}; dbname={$dbname}", $username, $password);
      
      // set error mode
      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      
      // hapus koneksi
      $dbh = null;
    }
    catch (PDOException $e) {
      // tampilkan pesan kesalahan jika koneksi gagal
      echo "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
      die();
    }
?>