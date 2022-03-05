<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Petugas extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'title' => 'Data Petugas | AdaKami Pengaduan Masyarakat',
            'petugas' => $this->userModel->getUsers('petugas')->getResultArray(),
        ];

        return view('admin/petugas/index', ['data' => $data]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            'title' => 'Tambah Petugas | AdaKami Pengaduan Masyarakat',
        ];

        return view('admin/petugas/new', ['data' => $data]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah digunakan.',
                ]
            ],
            'nama' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                    'min_length' => 'Minimal 3 karakter.',
                ]
            ],
            'telp' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No. Telp harus diisi.',
                    'numeric' => 'No. Telp tidak valid.',
                ]
            ],
            'username' => [
                'rules' => 'required|alpha_numeric|min_length[4]|max_length[30]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username harus diisi.',
                    'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka.',
                    'min_length' => 'Username harus diisi minimal 4 karakter.',
                    'max_length' => 'Username terlalu panjang.',
                    'is_unique' => 'Username sudah digunakan.',
                ]
            ],
            'password'     => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Minimal 8 karakter.',
                ]
            ],
        ];

        if (! $this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost();

        $this->userModel->withGroup('petugas')->insert([
            'email' => $data['email'],
            'username' => $data['username'],
            'nama' => $data['nama'],
            'telp' => $data['telp'],
            'password_hash' => password_hash(base64_encode(hash('sha384', $data['password'], true)), PASSWORD_DEFAULT, [10]),
            'active' => 1,
        ]);

        return redirect()->to(base_url('/petugas'))->with('success', 'Petugas berhasil ditambah!');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->userModel->delete($id);

        return redirect()->to(base_url('/petugas'))->with('success', 'Data Petugas berhasil dihapus!');
    }
}
