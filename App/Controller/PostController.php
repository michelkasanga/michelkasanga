<?php

namespace App\Controller;

class PostController extends AppController
{
    public function index()
    {
        $this->control('pages@@home');
    }
    public function hello()
    {
        $this->control('pages@@hello');
    }
}
