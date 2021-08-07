<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case '':
            if (file_exists('pages/home.php')) {
                include 'pages/home.php';
            } else {
                include "pages/404.php";
            }
            break;
        case 'home':
            if (file_exists('pages/home.php')) {
                include 'pages/home.php';
            } else {
                include "pages/404.php";
            }
            break;
        case 'jenisbarangread':
            if (file_exists('pages/admin/jenisbarang/jenisbarangread.php')) {
                include 'pages/admin/jenisbarang/jenisbarangread.php';
            } else {
                include "pages/404.php";
            }
            break;
        case 'jenisbarangcreate':
            if (file_exists('pages/admin/jenisbarang/jenisbarangcreate.php')) {
                include 'pages/admin/jenisbarang/jenisbarangcreate.php';
            } else {
                include "pages/404.php";
            }
            break;
        case 'jenisbarangupdate':
            if (file_exists('pages/admin/jenisbarang/jenisbarangupdate.php')) {
                include 'pages/admin/jenisbarang/jenisbarangupdate.php';
            } else {
                include "pages/404.php";
            }
            break;
        case 'jenisbarangdelete':
            if (file_exists('pages/admin/jenisbarang/jenisbarangdelete.php')) {
                include 'pages/admin/jenisbarang/jenisbarangdelete.php';
            } else {
                include "pages/404.php";
            }
            break;
        default:
            include "pages/404.php";
            break;
    }
} else {
    include "pages/home.php";
}
