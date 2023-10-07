<?php

class Pages extends Controller
{
    public function __construct()
    {
        echo 'pages loded';
        $this->PostModel = $this->model('Post');
    }
    public function index()
    {
        
    }
}

?>