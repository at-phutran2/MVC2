<?php

namespace App\Controllers;

use App\Models\Post;
use App\Core\session;

class PostsController extends Controller
{
    public function view($id)
    {
        $model = new Post();
        $post = $model->find($id);

        view('posts.view',$post);
    }
    public function add()
    {   
        if(Session::get('username')!=NULL){
            if(isset($_POST['submit'])){
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $image = $target_file;
                $title = $_POST['title'];
                $content = $_POST['content'];
                $author = Session::get('username');
                $description = $_POST['description'];
                $created_at = date('Y-m-d H:i:s');
                $model = new Post();
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                $model->add($title,$description,$content,$author,$created_at,$image);
                header('Location:/');

                
            }
        }
        else {
            header('Location:/users/login');
        }
        view('posts.add');
    }
    
}
