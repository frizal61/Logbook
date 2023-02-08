<?php

namespace App\Controllers;

use App\Models\FormModel;

class Home extends BaseController
{
    protected $formmodel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->formmodel = new FormModel();
    }

    public function index()
    {

        $search = $this->request->getVar('search');
        if ($search) {
            $perbaikan = $this->formmodel->getdata($search);
        } else {
            $perbaikan = $this->formmodel;
        }


        $data = [
            'perbaikan' => $perbaikan->paginate(10, 'history'),
            'pager' => $this->formmodel->pager
        ];
        return view('home', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Harus Diisi',
                ]
            ],
            'kegiatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kegiatan Wajib Diisi',
                ]
            ],
            'perbaikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Perbaikan Harus Diisi',
                ]
            ],
            'ruangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Ruangan Harus Diisi',
                ]
            ],
            'langkah' => [
                'rules' => 'required|max_length[200]',
                'errors' => [
                    'required' => 'Langkah Perbaikan Harus Diisi',
                    'max_length' => 'Langkah Perbaikan Tidak Boleh Lebih Dari 200 Huruf',
                ]
            ],
            'hasil' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hasil Harus Diisi',
                ]
            ]
        ])) {
            return redirect()->to('/')->withInput();
        }

        $this->formmodel->save([
            'Tanggal' => $this->request->getVar('tanggal'),
            'Kegiatan' => $this->request->getVar('kegiatan'),
            'Jenis_Perbaikan' => $this->request->getVar('perbaikan'),
            'Langkah_Perbaikan' => $this->request->getVar('langkah'),
            'Nama_Ruangan' => $this->request->getVar('ruangan'),
            'Hasil' => $this->request->getVar('hasil'),
        ]);
        return redirect()->to('/');
    }
}
