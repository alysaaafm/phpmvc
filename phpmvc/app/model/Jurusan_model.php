<?php 

class Jurusan_model {
    private $table = 'data_jurusan';
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function getAllBlog(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }  

    public function getBlogById($id){
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahData($data){
        $query = "INSERT INTO data_jurusan VALUES(null, :nama)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusData($id){

        $query = "DELETE FROM data_jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataJurusan(){
        $query = "UPDATE data_jurusan SET 
        nama = :nama
        WHERE id = :id";


        $this->db->query($query);
        $this->db->bind("nama", $_POST["nama"]);
        $this->db->bind("id", $_POST["id"]);
 
        $this->db->execute();

        return $this->db->rowCount();
    }

 

}

?>
