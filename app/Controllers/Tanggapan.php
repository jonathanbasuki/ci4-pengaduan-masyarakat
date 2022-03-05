<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Tanggapan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        if (in_groups('admin') || in_groups('petugas')) {
            $data = [
                'title' => 'Pengaduan Masyarakat | AdaKami Pengaduan Masyarakat',
                'aduan' => $this->pengaduanModel->getPengaduan()->getResultArray(),
            ];

            return view('admin/tanggapan/index', ['data' => $data]);
        }

        if (in_groups('user')) {
            $data = [
                'title' => 'Aduan Saya | AdaKami Pengaduan Masyarakat',
                'aduan' => $this->pengaduanModel->getPengaduan(user()->id)->getResultArray(),
            ];

            return view('user/pengaduan', ['data' => $data]);
        }
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
            'title' => 'Buat Aduan Baru | AdaKami Pengaduan Masyarakat',
        ];

        return view('user/new', ['data' => $data]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        date_default_timezone_set('Asia/Jakarta');

        $rules = [
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,2048]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto harus diisi.',
                    'max_size' => 'File melebihi batas maksimal 2 MB.',
                    'mime_in' => 'Ekstensi file yang diperbolehkan: .jpg, .jpeg, .png.'
                ]
            ],
            'laporan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Laporan harus diisi.'
                ]
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('foto');
        $filename = $file->getRandomName();
        $file->move('uploads/', $filename);

        $this->pengaduanModel->insert([
            'tanggal' => date('Y-m-d'),
            'nik' => user()->nik,
            'laporan' => $this->request->getPost('laporan'),
            'foto' => $filename,
        ]);

        return redirect()->to(base_url('/aduan'))->with('success', 'Aduan berhasil dibuat!');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        if (in_groups('admin') || in_groups('petugas')) {
            $data = [
                'title' => 'Selesaikan Pengaduan | AdaKami Pengaduan Masyarakat',
                'aduan' => $this->pengaduanModel->find($id),
            ];

            return view('admin/tanggapan/tanggapan', ['data' => $data]);
        }

        if (in_groups('user')) {
            $data = [
                'title' => 'Ubah Aduan | AdaKami Pengaduan Masyarakat',
                'aduan' => $this->pengaduanModel->find($id),
            ];

            return view('user/edit', ['data' => $data]);
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        date_default_timezone_set('Asia/Jakarta');

        if (in_groups('admin') || in_groups('petugas')) {
            $rules = [
                'tanggapan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggapan harus diisi.',
                    ]
                ],
            ];

            if (! $this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $this->pengaduanModel->where('id', $id)->set([
                'status' => 'Selesai',
            ])->update();

            $this->tanggapanModel->insert([
                'id_pengaduan' => $id,
                'tanggal' => date('Y-m-d'),
                'tanggapan' => $this->request->getPost('tanggapan'),
                'id_petugas' => user()->id,
            ]);

            return redirect()->to('/aduan')->with('success', 'Aduan selesai ditanggapi!');
        }

        if (in_groups('user')) {
            $rules = [
                'foto' => [
                    'rules' => 'max_size[foto,2048]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'File melebihi batas maksimal 2 MB.',
                        'mime_in' => 'Ekstensi file yang diperbolehkan: .jpg, .jpeg, .png.'
                    ]
                ],
                'laporan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Laporan harus diisi.'
                    ]
                ],
            ];

            if (! $this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $post = $this->request->getPost();
            $file = $this->request->getFile('foto');

            if ($file->getError() == 4) {
                $filename = $post['old_file'];
            } else {
                $filename = $file->getRandomName();
                $file->move('uploads/', $filename);

                if (file_exists('uploads/' . $post['old_file'])) {
                    unlink('uploads/' . $post['old_file']);
                }
            }

            $this->pengaduanModel->where('id', $id)->set([
                'tanggal' => date('Y-m-d'),
                'foto' => $filename,
                'laporan' => $post['laporan'],
            ])->update();

            return redirect()->to(base_url('/aduan'))->with('success', 'Perubahan aduan berhasil disimpan!');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $aduan = $this->pengaduanModel->find($id);
        $path = 'uploads/' . $aduan['foto'];

        if (file_exists($path)) {
            unlink($path);
        }

        $this->pengaduanModel->delete($id);

        return redirect()->to(base_url('/aduan'))->with('success', 'Aduan berhasil dihapus!');
    }

    public function proses($id = null)
    {
        $this->pengaduanModel->where('id', $id)->set([
            'status' => 'Diproses',
        ])->update();

        return redirect()->to(base_url('/aduan'))->with('success', 'Aduan diproses!');
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan Kerja | AdaKami Pengaduan Masyarakat',
            'aduan' => $this->tanggapanModel->getTanggapan()->getResultArray(),
        ];

        return view('admin/tanggapan/laporan', ['data' => $data]);
    }

    public function history()
    {
        $data = [
            'title' => 'Riwayat Pengaduan | AdaKami Pengaduan Masyarakat',
            'aduan' => $this->tanggapanModel->getHistory(user()->nik)->getResultArray(),
        ];

        return view('user/history', ['data' => $data]);
    }
}
