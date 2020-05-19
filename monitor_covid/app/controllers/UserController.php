<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;

class UserController extends Controller
{

    public function indexAction()
    {
        return $this->response->redirect();
    }

    public function loginAction()
    {
        if ($this->session->has('auth')) {
            return $this->response->redirect('bantuan/index');
        }
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = User::findFirst([
                'email = :email:',
                'bind' => ['email' => $email]
            ]);
            if ($user && password_verify($password, $user->password)) {
                $this->session->set(
                    'auth',
                    [
                        'id' => $user->id,
                        'name' => $user->name
                    ]
                );
                $this->flash->success("Selamat datang {$user->nama}!");
                return $this->response->redirect('bantuan/index');
            }

            $this->flash->error('Email/password salah!');
        }
    }

    public function registerAction()
    {
        if ($this->session->has('auth')) {
            return $this->response->redirect('bantuan/index');
        }
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $nama = $this->request->getPost('nama');

            $user = new User();
            $user->assign([
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'nama' => $nama
            ]);

            if (!$user->save()) {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            }
            else {
                $this->flash->success('Pendaftaran akun berhasil! Silahkan login untuk mengakses sistem.');
                return $this->response->redirect('user/login');
            }
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        return $this->response->redirect();
    }

}

