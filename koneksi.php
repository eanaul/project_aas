<?php

class Server{
    protected $server = "localhost",
    $usn = "root",
    $pass = "",
    $db = "peminjaman";
    
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->server, $this->usn, $this->pass, $this->db);
    }
}

