<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'users';

    public function checkLogin($username,$password){

    	 $sql = "SELECT * FROM {$this->table} WHERE username = '$username' AND password = '$password'";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
    }


    public function add($username,$password,$fullname){
    	 $sql = "INSERT INTO users(username,password,fullname) 
    	 VALUES('$username','$password','$fullname')";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            
    }


}

