<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Api extends ResourceController
{
    protected $modelName = 'App\Models\DataProjekModel';
    protected $format    = 'json';
    public function index()
    {
        helper('form');
        $API = $this->request->uri->getSegment(3);
        $dataprojek = new \App\Models\DataProjekModel();
        $projek = $dataprojek->where('token', $API)->first();

        if ($projek->statusfield1 == 'on') {
            $data1 = $this->request->getGetPost('datafield_1');
        } else {
            $data1 = '';
        }
        if ($projek->statusfield2 == 'on') {
            $data2 = $this->request->getGetPost('datafield_2');
        } else {
            $data2 = '';
        }
        if ($projek->statusfield3 == 'on') {
            $data3 = $this->request->getGetPost('datafield_3');
        } else {
            $data3 = '';
        }
        $data = [
            'datafield_1' => $data1,
            'datafield_2' => $data2,
            'datafield_3' => $data3,
        ];
        return $this->model->updateData($data, $API);
    }

    public function read()
    {
        $API = $this->request->uri->getSegment(3);
        $dataprojek = new \App\Models\DataProjekModel();

        $projek = $dataprojek->where('token', $API)->first();

        return $this->respond($projek);
    }

    public function fetch()
    {
        $id = $this->request->uri->getSegment(3);
        $dataprojek = new \App\Models\DataProjekModel();

        $projek = $dataprojek->where('id', $id)->first();

        return $this->respond($projek);
    }
}
