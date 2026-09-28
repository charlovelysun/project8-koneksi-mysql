<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "project8_db"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}