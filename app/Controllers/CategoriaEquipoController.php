<?php

namespace App\Controllers;

use App\Models\CategoriaEquipoModel;

class CategoriaEquipoController extends BaseController
{
    public function index()
    {
        $model = new CategoriaEquipoModel();
        $data['categorias'] = $model->findAll();

        return view('categorias/index', $data);
    }

    public function new()
    {
        return view('categorias/new');
    }

    public function create()
    {
        $model = new CategoriaEquipoModel();

        $model->insert([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'activo' => 1,
        ]);

        return redirect()->to(site_url('categorias'));
    }
}
