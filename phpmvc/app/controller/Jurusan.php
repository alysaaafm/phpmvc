<?php 

class Jurusan extends Controller {

    public function index(){

        $data['judul'] = "user";
        $data['nama'] = $this->model("Jurusan_model")->getAllBlog();
        $this->view("templates/header", $data);
        $this->view('jurusan/index', $data);
        $this->view("templates/footer", $data);
    }

    public function detail($id){
        $data['judul'] = "Detail";
        $data['jurusan'] = $this->model("Jurusa_model")->getBlogById($id);
        $this->view("templates/header", $data);
        $this->view('jurusan/detail', $data);
        $this->view("templates/footer", $data);
    
    }

    public function tambah(){
        if($this->model("Jurusan_model")->tambahData($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header("Location: " . BASE_URL . "/jurusan");
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'success');
            header("Location: " . BASE_URL . "/jurusan");
            exit;

        }
    }
    public function hapus($id){
        if($this->model("Jurusan_model")->hapusData($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header("Location: " . BASE_URL . "/jurusan");
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'success');
            header("Location: " . BASE_URL . "/jurusan");
            exit;

        }
    }



    public function ubah(){
        if($this->model("Jurusan_model")->ubahDataJurusan($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header("Location: " . BASE_URL . "/jurusan");
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'success');
            header("Location: " . BASE_URL . "/jurusan");
            exit;

        }
    }
}


?>