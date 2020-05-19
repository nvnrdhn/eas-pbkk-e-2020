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
        $this->view->bantuan = Bantuan::find();
    }

    public function kategoriAction($kategori_id)
    {
        $this->view->pick('bantuan/index');
        $this->view->selected_kategori = Kategori::findFirst($kategori_id);
        $this->view->bantuan = Bantuan::findByKategoriId($kategori_id);
    }

    public function createAction()
    {
        if ($this->request->isPost()) {
            $nama = $this->request->getPost('nama');
            $kategori = $this->request->getPost('kategori');
            $jumlah = $this->request->getPost('jumlah');
            $satuan = $this->request->getPost('satuan');
            $array_bantuan = [];
            for ($i=0;$i<count($nama);$i++) {
                $bantuan = new Bantuan();
                $bantuan->assign([
                    'nama' => $nama[$i],
                    'kategori_id' => $kategori[$i],
                    'jumlah' => $jumlah[$i],
                    'satuan' => $satuan[$i]
                ]);
                $array_bantuan[] = $bantuan;
            }
            if (empty($array_bantuan)) return $this->flash->error('Tidak ada bantuan yang ditambahkan!');
            $transaksi = new Transaksi();
            $transaksi->user_id = $this->session->get('auth')['id'];
            $transaksi->bantuan = $array_bantuan;
            if (!$transaksi->save()) {
                foreach ($transaksi->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            }
            else {
                $this->flash->success('Bantuan berhasil ditambahkan!');
                return $this->response->redirect('bantuan/details/'.$transaksi->id);
            }
        }
    }

    public function detailsAction($transaksi_id)
    {
        $this->view->transaksi = Transaksi::findFirst($transaksi_id);
    }

}

