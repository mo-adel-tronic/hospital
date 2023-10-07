<?php


class Controller
{
    public function model($model)
    {
        require(MODEL.$model.'.php');

        return new $model;
    }

    public function view($view,$data=[])
    {
        if(file_exists(VIEW.$view.'.php'))
        {
            require(VIEW.$view.'.php');
        }else
        {
            echo 'Can not find This view';
        }
    }
}
?>