<?php

namespace App\Controllers;

class Manual extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    //--------------------------------------------------------------------
    public function index()
    {
        if ($this->session->get('isLoggedIn')) {
            return view('manual/index');
        }
        return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    public function projek()
    {
        if ($this->session->get('isLoggedIn')) {
            $id = $this->request->uri->getSegment(3);

            $dataprojekmodel = new \App\Models\DataProjekModel();

            $projek = $dataprojekmodel->find($id);
            $valid = $projek->created_by;
            if ($valid == $this->session = session('username')) {
                return view('manual/projek', [
                    'projek' => $projek,
                ]);
            }
            return redirect()->to(site_url('auth/logout'));
        }
        return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    public function created()
    {
        if ($this->session->get('isLoggedIn')) {
            if ($this->request->getPost()) {
                //jika ada data yang di post
                $data = $this->request->getPost();
                $this->validation->run($data, 'manual');
                $errors = $this->validation->getErrors();

                if (!$errors) {
                    //simpan datanya
                    $dataprojekmodel = new \App\Models\DataProjekModel();

                    $datavalid = new \App\Entities\DataProjek();
                    $generate = base64_encode(random_bytes(32));
                    $token = preg_replace("/[^a-zA-Z0-9]/", "", $generate);

                    $datavalid->namaprojek = htmlspecialchars($this->request->getPost('namaprojek'));
                    $datavalid->token = $token;
                    $datavalid->role = 'manual';
                    $datavalid->category = 'all';
                    $datavalid->deskripsi = htmlspecialchars($this->request->getPost('deskripsi'));
                    $datavalid->gambar = $this->request->getFile('gambar');
                    $datavalid->statusfield1 = $this->request->getPost('statusfield1');
                    $datavalid->statusfield2 = $this->request->getPost('statusfield2');
                    $datavalid->statusfield3 = $this->request->getPost('statusfield3');
                    $datavalid->created_by = $this->session->get('username');
                    $datavalid->created_date = date("Y-m-d H:i:s");

                    $dataprojekmodel->save($datavalid);

                    $id = $dataprojekmodel->insertID();

                    $segment = ['manual', 'projek', $id];
                    // // /barang/view/$id
                    return redirect()->to(site_url($segment));
                } else {
                    $this->session->setFlashdata('errors', $errors);
                }
            }
            return view('manual/created');
        }
        return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    public function update()
    {
        $statusfield1 = $this->request->getPost('statusfield1');
        $statusfield2 = $this->request->getPost('statusfield1');
        $statusfield3 = $this->request->getPost('statusfield1');
        if (!$statusfield1) {
            $statusfield1 = 'off';
        }
        if (!$statusfield2) {
            $statusfield2 = 'off';
        }
        if (!$statusfield3) {
            $statusfield3 = 'off';
        }

        $id = $this->request->uri->getSegment(3);

        $dataprojekmodel = new \App\Models\DataProjekModel();

        $projek = $dataprojekmodel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'monitoringupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\DataProjek();
                $b->id = $id;
                $b->fill($data);
                $b->statusfield1 = $statusfield1;
                $b->statusfield2 = $statusfield2;
                $b->statusfield3 = $statusfield3;

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->updated_date = date("Y-m-d H:i:s");

                $dataprojekmodel->save($b);

                return redirect()->to(site_url('user/index'));
            } else {
                $this->session->setFlashdata('errors', $errors);
            }
        }

        return view('manual/update', [
            'projek' => $projek,
        ]);
    }
    //--------------------------------------------------------------------
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $projek = new \App\Models\DataProjekModel();
        $delete = $projek->delete($id);

        return redirect()->to(site_url('user/index'));
    }
}
