<?php
//tampilkan  semua data
function tampilkanSemuaData($nama_table, $andWhere = "")
{
    //dokumentasi wpcodex developer
    global $wpdb;


    $table_name  = $wpdb->prefix . $nama_table;
    $sql = "SELECT * FROM " . $table_name . " WHERE 1" . $andWhere;
    $query = $wpdb->get_results($sql);


    return $query;
}

// global $wpdb;

// // Definisikan prefix tabel WordPress
// $table1 = $wpdb->prefix . 'post';
// $table2 = $wpdb->prefix . 'postmeta';

// // Tulis kueri SQL untuk join tabel
// $query = $wpdb->prepare("
//     SELECT t1.*, t2.*
//     FROM $table1 AS t1
//     LEFT JOIN $table2 AS t2 ON t1.id = t2.table1_id
// ");

// // Eksekusi kueri SQL
// $results = $wpdb->get_results($query);

// // Periksa apakah ada data yang ditemukan
// if ($results) {
//     // Loop melalui setiap baris hasil
//     foreach ($results as $row) {
//         // Lakukan apa pun yang Anda inginkan dengan data, contohnya mencetaknya
//         echo 'ID: ' . $row->id . ', Column1: ' . $row->column1 . ', Column2: ' . $row->column2 . '<br>';
//     }
// } else {
//     echo 'Tidak ada data yang ditemukan.';
// }




?>