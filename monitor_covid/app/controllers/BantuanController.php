<?php
declare(strict_types=1);

class BantuanController extends ControllerBase
{

    public function indexAction()
    {
        if (!$this->session->has('auth')) {
            $this->flash->error('Silahkan login terlebih dahulu!');
            return $this->response->redirect('user/login');
        }
    }

    public function kategoriAction($kategori_id)
    {

    }

    public function createAction()
    {

    }

    public function detailsAction($bantuan_id)
    {

    }

}

