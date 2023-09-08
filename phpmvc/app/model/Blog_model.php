<?php 

class Blog_model {
    private $blog = [
        [
            "penulis" => "alysa",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Models"
        ],
        [
            "penulis" => "febia",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Controller"
        ],
        [
            "penulis" => "mutoharoh",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "view"
        ]
    ];
    public function getAllBlog(){
        return $this->blog;
    }     
    private $guru = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Mengajar PHP MVC",
            "tulisan" => "Models"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Mengajar PHP MVC",
            "tulisan" => "Controller"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Mengajar PHP MVC",
            "tulisan" => "view"
        ]
    ];
    public function getAllGuru(){
        return $this->guru;
    }     
}

?>