<?php
class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }
    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model(model: 'Mahasiswa_model')->getMahasiswaById($id);
        $this->view(view: "templates/header", data: $data);
        $this->view(view: "mahasiswa/detail", data: $data);
        $this->view(view: "templates/footer");
    }

    public function tambah(){
        if($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0){
            Flasher::setFlash(pesan: "Berhasil", aksi: "ditambahkan", tipe: "success");
            header(header: "location: " . BASEURL . "/mahasiswa");
            exit;
        }else{
            Flasher::setFlash(pesan: "Gagal", aksi: "ditambahkan", tipe: "danger");
            header(header: "location: " . BASEURL . "/home");
            exit;
        }
    }
    public function hapus($id){
        if($this->model(model: "Mahasiswa_model")->hapusDataMahasiswa($id) > 0){
            Flasher::setFlash(pesan: "Berhasil", aksi: "dihapus", tipe: "success");
            header(header: "location: " . BASEURL . "/mahasiswa");
            exit;
        }else{
            Flasher::setFlash(pesan: "Gagal", aksi: "dihapus", tipe: "danger");
            header(header: "location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function getUbah(){
        echo json_encode(value: $this->model(model: 'Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah(){
        if($this->model(model: "Mahasiswa_model")->ubahDataMahasiswa($_POST) > 0){
            Flasher::setFlash(pesan: "Berhasil", aksi: "diubah", tipe: "success");
            header(header: "location: " . BASEURL . "/mahasiswa");
            exit;
        }else{
            Flasher::setFlash(pesan: "Gagal", aksi: "diubah", tipe: "danger");
            header(header: "location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function cari(): void{
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model(model: 'Mahasiswa_model')->cariDataMahasiswa();
        $this->view(view: "templates/header", data: $data);
        $this->view(view: "mahasiswa/index", data: $data);
        $this->view(view: "templates/footer");
    }
}