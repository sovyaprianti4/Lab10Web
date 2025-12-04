<?php
include "database.php";

$db = new Database();

// insert contoh
$data = [
   'nim' => '312410344',
   'nama' => 'Sovy Aprianti',
   'alamat' => 'Kabupaten Bekasi, Jawa Barat'
];

$insert = $db->insert('mahasiswa', $data);

if ($insert) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data!";
}
?>
