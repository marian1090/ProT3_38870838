<?php

namespace App\Controllers;
use App\Models\Usuarios_model;

class UsuarioController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'registro';
        echo view('head', $data);
        echo view('menu');
        echo view('usuario/registrarse');
        echo view('footer');  
    }

    public function formValidation()
    {

        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'password' => 'required|min_length[3]|max_length[10]',
            'passconf' => 'required|min_length[3]|max_length[10]|matches[password]'
            
            
        ]);
        $formModel = new Usuarios_model();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('head', $data);
            echo view('menu');
            echo view('usuario/registrarse', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email'  => $this->request->getVar('email'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ]);
            return $this->response->redirect(site_url(''));
        }
        echo view('footer');  
    }

}