<?php

    namespace App\Controllers;

    use App\Models\User;
    use App\Core\Session;

    class UsersController extends Controller
    {


        public function login()
        {
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $model = new User();
                $check = $model->checkLogin($username,$password);
                if($check){
                    Session::set('username',$username);
                    header('Location:/');
                }
                else{
                    view('users.login');
                }
            }
            
            view('users.login');
        }

        public function logout(){
            Session::destroy();
            header('Location:/');
        }


        public function register()
        {
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $model = new User();
            
                
                $model->add($username,$password,$fullname);
                Session::set('username',$username);

                echo Session::get('username');
            
                header('Location:/');
                
             }
            
            
            view('users.register');

        }


    }
