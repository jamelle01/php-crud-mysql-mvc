<?php

require_once 'models/PostModel.php';

class PostController
{
    private $model;

    public function __construct(PostModel $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $posts = $this->model->getAllPosts();
        require 'views/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $this->model->createPost($title, $content);
            header('Location: index.php');
        } else {
            require 'views/create.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $this->model->updatePost($id, $title, $content);
            header('Location: index.php');
        } else {
            $post = $this->model->getPostById($id);
            require 'views/edit.php';
        }
    }

    public function delete($id)
    {
        $this->model->deletePost($id);
        header('Location: index.php');
    }
}
