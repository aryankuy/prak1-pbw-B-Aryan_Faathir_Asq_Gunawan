<?php

include "models/mahasiswaModel.php";

class mahasiswaController {

    private $model;

    public function __construct($koneksi) {
        $this->model = new mahasiswaModel($koneksi);
    }

    public function index() {

        $dataMahasiswa = $this->model->getAllMahasiswa();

        include "views/mahasiswa/index.php";
    }
}
?>