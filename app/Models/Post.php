<?php

namespace App\Models;

class Post extends Model
{
    protected $table = 'posts';

    public function add($title,$description,$content,$author,$created_at,$image){
    	 $sql = "INSERT INTO posts(title,description,content,author,created_at,image) 
    	 VALUES('$title','$description','$content','$author','$created_at','$image')";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            
    }

    public function getAll()
        {
          
            $sql = "SELECT * FROM {$this->table} ORDER BY created_at DESC";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }


}


