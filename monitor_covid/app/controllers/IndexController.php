<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        if ($this->session->has('auth')) {
            return $this->response->redirect('bantuan/index');
        }
    }

}

