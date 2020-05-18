<?php
declare(strict_types=1);

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        return $this->response->redirect();
    }

    public function loginAction()
    {
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
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $nama = $this->request->getPost('nama');

            $user = new User();
            $user->email = $email;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->nama = $nama;

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
    }

}

