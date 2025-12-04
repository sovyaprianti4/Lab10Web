<?php
include "database.php";
$db = new Database();

// ID yang ingin dihapus — pastikan ada datanya
$id = 1;

$delete = $db->delete("mahasiswa", "WHERE id=$id");

if ($delete) {
    echo "Delete data BERHASIL!";
} else {
    echo "Delete data GAGAL!";
}
?>
