<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='principal';
        echo view('head',$data);
        echo view('menu');
        echo view('principal');
        echo view('footer');
    }  

    public function nosotros()
    {
        $data['titulo']='nosotros';
            echo view('head',$data);
            echo view('menu');
            echo view('nosotros');
            echo view('footer');
    }  

    public function acerca()
    {
        $data['titulo']='nosotros';
            echo view('head',$data);
            echo view('menu');
            echo view('acerca');
            echo view('footer');
    }  
    
}
