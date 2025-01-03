<?php
 
 class nasabah {

    function __construct() {
    if (isset($_SESSION["nasabah"])) {
        $_SESSION["nasabah"];
       } 
    }
 }

    function tambah() {
        //periksa apakah form telah dikirim
        if (isset($_SESSION["submit"])) {
            $id = $_SESSION["id"];
            $nama = $_SESSION["nama"]; 
            $email = $_SESSION["email"];
            $uang = $_SESSION["uang"];
            $tanggal = $_SESSION["tanggal"];
    }