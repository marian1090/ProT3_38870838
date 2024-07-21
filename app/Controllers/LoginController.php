<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class LoginController extends BaseController{


	public function index(){
		helper(['form']);
		$data['title'] = 'Login';
		echo view('head', $data);
        echo view('menu');
        echo view('login/login');
        echo view('footer');
	} 
    
	public function ingresar(){
        $session 	= session();
		$model 		= new usuarios_model();
		$email 		= $this->request->getVar('email');
		$password 	= $this->request->getVar('password');
		$data 		= $model->where('email', $email)->first();
		if($data){
			$pass 			= $data['password'];
			$verify_pass 	= password_verify($password, $pass);
			if($verify_pass){
				$ses_data = [
					'id_usuario'       => $data['id_usuario'],
					'nombre'     => $data['nombre'],
					'apellido'     => $data['apellido'],
					'email'    => $data['email'],
					'usuario'    => $data['usuario'],
					'perfil_id'    => $data['perfil_id'],
					'logged_in'     => TRUE
				];
				$session->set($ses_data);
				if ($session->get('perfil_id') == 1){
					return $this->response->redirect(base_url('dashboard_admin'));
				} else {
					return $this->response->redirect(base_url('dashboard'));
				}
				
			}else{
				$session->setFlashdata('msg', 'Contraseña inválida');
				return redirect()->to('/login');
			}
		}else{
			$session->setFlashdata('msg', 'Email no encontrado');
			return redirect()->to('/login');
		}
	}
 
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('');
	}
}