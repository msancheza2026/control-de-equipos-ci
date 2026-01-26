<?php

namespace App\Controllers;

use App\Models\EquipoModel;
use App\Models\AreaModel;
use App\Models\CategoriaEquipoModel;

class EquipoController extends BaseController
{
    public function index()
    {
        $model = new EquipoModel();
        $data['equipos'] = $model->findAll();

        return view('equipos/index', $data);
    }

    public function new()
    {
        $areaModel = new AreaModel();
        $catModel  = new CategoriaEquipoModel();

        return view('equipos/new', [
            'areas' => $areaModel->findAll(),
            'categorias' => $catModel->findAll(),
        ]);
    }

    public function create()
    {
        $model = new EquipoModel();

        $model->insert([
            'codigo_interno' => $this->request->getPost('codigo_interno'),
            'nombre'         => $this->request->getPost('nombre'),
            'tipo_id'        => $this->request->getPost('tipo_id'),
            'area_id'        => $this->request->getPost('area_id'),
            'estado'         => 'activo',
        ]);

        return redirect()->to(site_url('equipos'));
    }
}
