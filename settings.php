<?php

$file = 'simpan_data.json';
class fungsi {

    //membaca data
   static function bacadata($file) {
        if(file_exists($file)) {
            $data = file_get_contents($file);
            return json_decode($data, true);
        }
        return [];
    }

    //menyimpan data
    static function simpandata($file, $data) {
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    }

    static function delete($file, $id) {
        //baca darri file json
        $data = self::bacadata($file);

        // pastikan id tidak kosong
        if (empty($id)) {
            return;
        }

        //filter data untuk menghapus item dengan i yang sesuai
        $databaru = array_filter ($data, function($item) use ($id) {
            return $item['id'] !== $id;

    });

    //urutkan ulang indeks array
    $databaru = array_values($databaru);

    // simpan kembali data yang sudah dihapus
    self::simpandata($file, $databaru);

    }
}


    //Tambah data baru
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $databaru = [
            'id' => $_POST['id'] ?? '',
            'nama'=> $_POST['nama'] ?? '',
            'email'=> $_POST['email'] ?? '',
            'uang'=> $_POST['uang'] ?? 0,
            'tanggal'=> $_POST['tanggal'] ?? '',
        ];
        // baca data lama dari file json
        $baca = fungsi::bacadata($file);
        // tambahkan data baru ke array lama
        $baca[] = $databaru;
        //simpan kembali data ke file json
        fungsi::simpandata($file, $baca);
    }

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus']; // Ambil ID dari parameter URL
        fungsi::delete($file, $id); // Hapus data berdasarkan ID
    }




