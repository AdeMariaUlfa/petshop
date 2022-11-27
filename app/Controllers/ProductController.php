<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use CodeIgniter\I18n\Time;

class ProductController extends BaseController
{
    protected $product;

    function __construct()
    {
        $this->product = new ProductsModel();
    }

    public function index()
    {
        $data['product'] = $this->product->findAll();
        return view('admin/product/index', $data);
    }
    public function create()
    {
        return view('admin/product/create');
    }
    public function save()
    {
        $data = array(
            'product'  => $this->request->getPost('product'),
            'gambar' => $this->request->getPost('gambar'),
            'created_at' => Time::now()
        );
        $product->saveProduct($data);
        return redirect()->to('/product');
        // if (!$this->validate([
        //     'product' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        //     'gambar' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],

        // ])) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // }
 
		// // $dataBerkas = $this->request->getFile('gambar');
		// // $fileName = $dataBerkas->getRandomName();
		// $this->$product->insert([
        //     'product' => $this->request->getVar('product'),
		// 	'gambar' => $this->request->getVar('gambar'),
		// ]);
		// //$dataBerkas->move('uploads/berkas/', $fileName);
        // session()->setFlashdata('message', 'Tambah Data Pegawai Berhasil');
        // return redirect()->to('/product');
    }
    public function edit($id)
    {
       
        $data['product'] = $product->getProduct($id)->getRow();
        echo view('admin/product/edit', $data);
    }

    public function update($id)
    {
        
        $id = $this->request->getPost('id_product');
        $data = array(
            'product'  => $this->request->getPost('product'),
            'gambar' => $this->request->getPost('gambar'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('/product');
    }

    public function delete($id)
    {
        
        $model->deleteProduct($id);
        return redirect()->to('/product');
    }
}