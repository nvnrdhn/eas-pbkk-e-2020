<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize()
    {
        $kategori = Kategori::find();
        $this->tag->prependTitle('INVO | ');
        $this->view->kategori = $kategori;
        $this->view->setTemplateAfter('main');
    }
}
