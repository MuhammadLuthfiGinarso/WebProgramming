<?php

namespace App\Controllers;

use App\Models\MataKuliahModel;
use CodeIgniter\Controller;

class MataKuliah extends Controller
{
    public function index()
    {
        $model = new MataKuliahModel();
        $data['mata_kuliah'] = $model->findAll();
        return view('mata_kuliah/index', $data);
    }

    public function create()
    {
        return view('mata_kuliah/create');
    }

    public function store()
    {
        $model = new MataKuliahModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'kode' => $this->request->getPost('kode'),
        ];
        $model->save($data);
        return redirect()->to('/mata_kuliah');
    }

    public function edit($id)
    {
        $model = new MataKuliahModel();
        $data['mata_kuliah'] = $model->find($id);
        return view('mata_kuliah/edit', $data);
    }

    public function update($id)
    {
        $model = new MataKuliahModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'kode' => $this->request->getPost('kode'),
        ];
        $model->update($id, $data);
        return redirect()->to('/mata_kuliah');
    }

    public function delete($id)
    {
        $model = new MataKuliahModel();
        $model->delete($id);
        return redirect()->to('/mata_kuliah');
    }
}
