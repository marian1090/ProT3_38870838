<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;

class Dashboard extends BaseController{
	public function index()
    {
    
        $dato['titulo']='panel de usuario';
        echo view('head', $dato);
        echo view('menu');
        echo view('login/dashboard');
        echo view('footer');
    }

    public function panel()
    {
       
        $dato['titulo']='panel de usuario';
        echo view('head', $dato);
        echo view('menu');
        echo view('login/dashboard_admin');
        echo view('footer');
    }
}

