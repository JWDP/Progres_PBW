<?php
     include "koneksi.php";
// Ambil kata kunci dari form pencarian
$kata_kunci = isset($_GET['kata_kunci']) ? $_GET['kata_kunci'] : '';

// Cek jika kata kunci tidak kosong
if (!empty($kata_kunci)) {
    // Buat query pencarian
    $query = "SELECT * FROM Mahasiswa WHERE  id = $npm";
    $stmt = $koneksi->prepare($query);

    // Siapkan parameter dan eksekusi
    $param = "%" . $kata_kunci . "%";
    $stmt->bind_param("s", $param);
    $stmt->execute();
    
    // Dapatkan hasilnya
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["nama_mahasiswa"]. "prodi" . $row["nama_mahasiswa"]. "<br>";
        }
    } else {
        echo "0 hasil ditemukan";
    }

    $stmt->close();
}
    // Tutup koneksi database
    $koneksi->close();
?>