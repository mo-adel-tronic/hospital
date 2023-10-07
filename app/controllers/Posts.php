<?php

class Posts extends Controller
{
    protected $post;
    public function __construct()
    {
        echo 'Posts loded';
        $this->post = $this->model('Post');
    }
    public function index()
    {
        $posts = $this->post->getPosts();
        $data = [
            'title' => 'welcome',
            'cat' => $posts
        ];
        $this->view('mo',$data);
    }
    public function edit($id)
    {
        echo $id;
    }
}

?>