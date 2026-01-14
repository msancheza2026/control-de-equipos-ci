<?php

namespace App\Controllers;

use App\Models\AreaModel;

class AreaController extends BaseController
{
    public function index()
    {
        $model = new AreaModel();
        $data['areas'] = $model->findAll();

        return view('areas/index', $data);
    }

    public function new()
    {
        return view('areas/new');
    }

    public function create()
    {
        $model = new AreaModel();

        $model->insert([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'activo' => 1,
        ]);

        return redirect()->to(site_url('/areas'));
    }
}
