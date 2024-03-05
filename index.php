<?php
/*
Plugin Name: Rommy Gunawan Plugin
Plugin URI: http://tesaja.liveblog365.com
Description: Ini hanya latihan plugin wordpress pertamaku
Version: 1.0.0
Author: Rommy Gunawan
Author URI: http://tesaja.liveblog365.com
*/

define('TEMP_DIR', plugin_dir_path(__FILE__) . '/templates/');
//define('TEMP_DIR', ...);: Ini adalah sintaks untuk mendefinisikan sebuah konstanta.konstanta bernama TEMP_DIR didefinisikan.
//plugin_dir_path(__FILE__): plugin_dir_path(), untuk mengembalikan jalur lengkap ke direktori dari file yang memanggilnya. 

include 'menu/function-menu.php';
