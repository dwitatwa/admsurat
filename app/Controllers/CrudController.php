<?php

namespace App\Controllers;

use App\Models\KeluarModel;
use App\Models\MasukModel;
use App\Models\NotaModel;

class CrudController extends BaseController
{
    public function addSK()
    {
        $model = new KeluarModel();
        $newData = [
            'no_surat' => $this->request->getVar('nomor_surat'),
            'tgl_surat' => $this->request->getVar('tanggal_surat'),
            'penerima' => $this->request->getVar('penerima'),
            'perihal' => $this->request->getVar('perihal')
        ];

        $model->save($newData);
        session()->setFlashdata('success', 'Data berhasil ditambah');
        return redirect()->back();
    }

    public function updateSK()
    {
        $model = new KeluarModel();
        $newData = [
            'id' => $this->request->getVar('id'),
            'no_surat' => $this->request->getVar('no_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'pengirim' => $this->request->getVar('pengirim'),
            'perihal' => $this->request->getVar('perihal')
        ];
        $model->save($newData);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->back();
    }

    public function deleteSK()
    {
        $model = new KeluarModel();
        $model->delete($this->request->getVar('id'));
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }

    public function addSM()
    {
        $model = new MasukModel();
        $newData = [
            'no_surat' => $this->request->getVar('no_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'pengirim' => $this->request->getVar('pengirim'),
            'perihal' => $this->request->getVar('perihal')
        ];

        $model->save($newData);
        session()->setFlashdata('success', 'Data berhasil ditambah');
        return redirect()->back();
    }

    public function updateSM()
    {
        $model = new MasukModel();
        $newData = [
            'id' => $this->request->getVar('id'),
            'no_surat' => $this->request->getVar('no_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'pengirim' => $this->request->getVar('pengirim'),
            'perihal' => $this->request->getVar('perihal')
        ];
        $model->save($newData);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->back();
    }

    public function deleteSM()
    {
        $model = new MasukModel();
        $model->delete($this->request->getVar('id'));
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }

    public function addNota()
    {
        if ($this->request->getFile('file_nota')->getSize() != 0) {
            $modelNota = new NotaModel();
            $newData = [
                'jenis' => $this->request->getVar('jenis'),
                'tgl' => $this->request->getVar('tgl'),
                'file_nota' => $this->request->getFile('file_nota')->getName(),
                'jumlah_bayar' => $this->request->getVar('jumlah_bayar')
            ];
            $modelNota->save($newData);
            session()->setFlashdata('success', 'Data berhasil ditambah');
            $this->request->getFile('file_nota')->move('file/nota', $this->request->getFile('file_nota')->getName(), true);
        }

        return redirect()->back();
    }

    public function updateNota()
    {
        $model = new NotaModel();
        $newData = [
            'id' => $this->request->getVar('id'),
            'jenis' => $this->request->getVar('jenis'),
            'tgl' => $this->request->getVar('tgl'),
            'file_nota' => $this->request->getFile('file_nota')->getName(),
            'jumlah_bayar' => $this->request->getVar('jumlah_bayar')
        ];
        $model->save($newData);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->back();
    }

    public function deleteNota()
    {
        $model = new NotaModel();
        $model->delete($this->request->getVar('id'));
        session()->setFlashdata('success', 'Data berhasil dihapus');
        unlink('file/nota/' . $this->request->getVar('file-name'));
        return redirect()->back();
    }
}
