<?php

namespace App\Controllers;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('admin/login');
    }
    public function dashboard()
    {
        $session = session();
        echo "Welcome back, ".$session->get('email');
        return view('admin/dashboard');
    }
    public function auth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('admin/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return 'error';
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return 'email doesnt exist';
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}