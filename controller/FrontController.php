<?php

require_once 'model/Front.php';

class FrontController
{

    private $front = NULL;

    public function __construct()
    {
        $this->front = new Front();
    }

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    public function handleRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;
        try {
            if (!$op || $op == 'list') {
                $this->lists();
            } elseif ($op == 'berita') {
                if(isset($_GET['id'])){
                    $this->detail_berita($_GET['id']);
                }else{
                $this->berita();                    
                }
            } elseif ($op == 'profil') {
                $this->profile();
            } elseif ($op == 'galeri') {
                $this->gallery();
            } else {
                $this->showError("Page not found", "Page for operation " . $op . " was not found!");
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
    }

    public function lists()
    {
//        $content = 'view/home/index.php';
//        $header = 'Dasboard';
        include 'view/main/index.php';
    }

    public function berita()
    {
        $data = $this->front->listBerita();
        include 'view/main/berita.php';
    }

    public function detail_berita($id)
    {
        $data = $this->front->listDetailBerita($id);
        include 'view/main/detail_berita.php';
    }

    public function profile()
    {
        $data = $this->front->listGuru();
        include 'view/main/profil.php';
    }

    public function gallery()
    {
        include 'view/main/galeri.php';
    }

    public function show()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$id) {
            throw new Exception('Internal error.');
        }
        $news = $this->news->getNewsById($id);

        include 'view/news/view.php';
    }

    public function showError($title, $message)
    {
        include 'view/error.php';
    }

}

// tambah asal tk siswa
// sebelum import masukkan form
// upload foto guru
// crud berita
// pagination

?>
