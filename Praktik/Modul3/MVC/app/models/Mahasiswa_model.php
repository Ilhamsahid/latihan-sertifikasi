<?php
class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Ilham Sahid Maulana",
    //         "nrp" => "123456789",
    //         "email" => "IlhamSahidMaulana@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Muhammad Sahrudin",
    //         "nrp" => "778908009",
    //         "email" => "muhammad_sahrudin@gmail.com",
    //         "jurusan" => "Rekayasa Perangkat Lunak"
    //     ],
    //     [
    //         "nama" => "Agus Maulana",
    //         "nrp" => "678987145",
    //         "email" => "Agus990@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ]
    // ];
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query(query: "SELECT * FROM mahasiswa");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query(query: "SELECT * FROM mahasiswa WHERE id=:id");
        $this->db->bind(param: "id", value: $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nrp , :email, :jurusan)";
        $this->db->query($query);

        $this->db->bind(param: 'nama', value: $data['nama']);
        $this->db->bind(param: 'nrp', value: $data['nrp']);
        $this->db->bind(param: 'email', value: $data['email']);
        $this->db->bind(param: 'jurusan', value: $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id): int{
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query(query: $query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data): int{
        $query = "UPDATE mahasiswa SET
        nama = :nama,
        nrp = :nrp,
        email = :email,
        jurusan = :jurusan
        WHERE id = :id";

        $this->db->query(query: $query);
        $this->db->bind(param: 'nama', value: $data['nama']);
        $this->db->bind(param: 'nrp', value: $data['nrp']);
        $this->db->bind(param: 'email', value: $data['email']);
        $this->db->bind(param: 'jurusan', value: $data['jurusan']);
        $this->db->bind(param: 'id', value: $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa(): array{
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(param: 'keyword', value: "%$keyword%");
        return $this->db->resultSet();
    }
}