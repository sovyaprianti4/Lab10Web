<?php
include "database.php";
$db = new Database();

// ID data yang ingin diperbarui
$id = 1;

$data = [
    'nim' => '999999',
    'nama' => 'Data Sudah Diupdate',
    'alamat' => 'Alamat Baru Update'
];

$update = $db->update("mahasiswa", $data, "id=$id");

if ($update) {
    echo "Update data BERHASIL!";
} else {
    echo "Update data GAGAL!";
}
?>
