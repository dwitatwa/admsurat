<?php

namespace App\Controllers;

use App\Models\KeluarModel;
use App\Models\MasukModel;
use App\Models\NotaModel;

class PageController extends BaseController
{
	public function index()
	{
		$model = new MasukModel();
		$data = [
			'data' => $model->get()->getResultArray()
		];
		return view('surat_masuk', $data);
		session();
	}

	public function suratKeluar()
	{
		$model = new KeluarModel();
		$data = [
			'data' => 	$model->get()->getResultArray()
		];
		return view('surat_keluar', $data);
	}

	public function login()
	{
		return view('login');
	}

	public function masuk()
	{

		if (
			$this->request->getVar('username') == "asmawati" &&
			$this->request->getVar('password') == "dearohdear"
		) {
			session()->set('akses', 'admin');
			return redirect()->to('/index');
		} else {
			return redirect()->to('/');
		}
	}

	public function nota()
	{
		$model = new NotaModel();
		$data = [
			'data' => 	$model->get()->getResultArray()
		];
		return view('data_nota', $data);
	}
}
