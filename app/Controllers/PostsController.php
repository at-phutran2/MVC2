<?php

    namespace App\Controllers;

    use App\Models\Post;

    class PostsController extends Controller
    {
        public function view($id)
        {
            $model = new Post();
            $post = $model->find($id);
            
            view('posts.view',$post);
        }
    }
