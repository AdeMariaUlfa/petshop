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
        $product = new ProductsModel();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'posts' => $product->findAll(),
            'pager' => $product->pager
        );

        return view('admin/product/index', $data);
    }
    public function create()
    {
        return view('admin/product/create');
    }
    public function save()
    {
        $product = new ProductsModel();

        $produk = $this->request->getPost('produk');
        $gambar = $this->request->getPost('gambar');
        $harga = $this->request->getPost('harga');
        $product->insert(
            [
                'product'  => $produk,
                'gambar' => $gambar,
                'harga' => $harga,
            ]
        );


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
        $product = new ProductsModel();
        $data = array(
            'product' => $product->find($id)
        );
       
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
