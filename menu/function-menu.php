<?php
/**
 * Step 1
 * Membuat menu di admin
 * Hook  : admin_menu
 */
add_action('admin_menu', 'menu');
function menu()
{
    add_menu_page(
        'Rommy Plugin', //page title
        'Rommy Plugin', //menu title sidebar
        'manage_options', //capability
        'menu-pluginRommy', //slug url / mengarah page
        'callbackMenu', //callback adalah fungsi kedua, menampilkan sebuah text
        'dashicons-admin-generic', //menu icon
        6 //posisi menu, bisa sesuaikan sendiri sesuai keinginan
    );
}

function callbackMenu() {
    include TEMP_DIR . 'tampil-table.php'; // mengarah ke templates/tampil-table.php
}