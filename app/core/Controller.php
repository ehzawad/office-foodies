<?php

require_once 'app/core/validation.php';
class Controller extends validation
{
    public function model($model)
    {
        require_once 'app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view,$data=null)
    {
        require_once 'app/views/'.$view.'.php';
    }


    public function route($controllerPath,$controller,$method,$data=[])
    {
        $file='app/controllers/'.$controllerPath.'/'.$controller.'.php';
        require_once $file;

        if(file_exists($file))
         {
            $controllerObject=new $controller;
            require_once $file;
            call_user_func_array([$controllerObject,$method],$data);
         }

        else
            echo "file not found";
    }




    public function authRoute()
    {
        /*
        if($this->role()=='employee')
            header('Location: '.'user');
        elseif ($this->role()=='admin')
            header('Location: '.'admin');
        elseif ($this->role()=='superadmin')
            header('Location: '.'superadmin');
        elseif ($this->role()=='vendor')
            header('Location: '.'vendor');
        else
            header('Location: '.'login');
        */
    }




}