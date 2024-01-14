<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function index()
    {
        $model = new ProdukModel();
        $data['produk'] = $model->getProduk();
        return view('modernize/master/produk/index', $data);
    }

    public function input()
    {
        return view('modernize/master/produk/input');
    }

    public function store()
    {

        $validation =  \Config\Services::validation();

        $gambar_produk = $this->request->getFile('gambar_produk');
        $nama_gambar = $gambar_produk->getRandomName();

        $data = [
            'id_produk' => $this->request->getPost('id_produk'),
            'nama_produk' => $this->request->getPost('nama_produk'),
            'gambar_produk' => $nama_gambar,
            'harga_produk' => $this->request->getPost('harga_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jumlah_produk' => $this->request->getPost('jumlah_produk'),
            'status' => $this->request->getPost('status'),
        ];

        if ($validation->run($data, 'produk') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('produk/input'))->withInput();
        } else {
            $gambar_produk->move(ROOTPATH . 'public/img', $nama_gambar);
            $model = new ProdukModel();
            $simpan = $model->insertProduk($data);
            if ($simpan) {
                session()->setFlashdata('input', 'Data produk berhasil ditambahkan!');
                return redirect()->to(base_url('produk'));
            }
        }
    }

    public function edit($id)
    {
        $model = new ProdukModel();
        $data['produk'] = $model->getProduk($id);

        return view('modernize/master/produk/edit', $data);
    }

    public function update()
    {
        $validation =  \Config\Services::validation();

        $gambar_produk = $this->request->getFile('gambar_produk');

        if ($gambar_produk->getError() == 4) {
            $nama_gambar = $this->request->getPost('old_gambar_produk');
        } else {
            $nama_gambar = $gambar_produk->getRandomName();
            unlink(ROOTPATH . 'public/img/' . $this->request->getPost('old_gambar_produk'));
        }

        $data = [
            'id_produk' => $this->request->getPost('id_produk'),
            'nama_produk' => $this->request->getPost('nama_produk'),
            'gambar_produk' => $nama_gambar,
            'harga_produk' => $this->request->getPost('harga_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jumlah_produk' => $this->request->getPost('jumlah_produk'),
            'status' => $this->request->getPost('status'),
        ];

        if ($validation->run($data, 'produk_update') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('produk/edit/' . $this->request->getPost('id_produk')))->withInput();
        } else {
            if ($gambar_produk->getError() == 4) {
                $gambar_produk->move(ROOTPATH . 'public/img', $nama_gambar);
            }

            $model = new ProdukModel();
            $ubah = $model->updateProduk($data, $data['id_produk']);
            if ($ubah) {
                session()->setFlashdata('update', 'Data produk berhasil diubah!');
                return redirect()->to(base_url('produk'));
            }
        }
    }

    public function delete($id)
    {
        $model = new ProdukModel();
        $produk = $model->getProduk($id);
        unlink(ROOTPATH . 'public/img/' . $produk['gambar_produk']);

        $hapus = $model->deleteProduk($id);
        if ($hapus) {
            session()->setFlashdata('delete', 'Data produk berhasil dihapus!');
            return redirect()->to(base_url('produk'));
        }
    }
}
