<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->BlogModel = new BlogModel();
        $this->middleware('auth');
    }

    public function index(Request $request){
        $pagination = 5;
        $data = [
            'blog' => $this->BlogModel::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('judul', 'like', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc') ->paginate($pagination)
        ];
        return view('admin.blog.v_blog', $data)
            ->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function tambah(){
        return view('admin.blog.v_tambah_blog');
    }

    public function tambah_aksi()
    {
        Request()->validate([
            'judul' => 'required',
            'nama_tempat' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:7024',   
        ], [
            'judul.required' => 'Harus diisi, tidak boleh kosong!',
            'nama_tempat.required' => 'Harus diisi, tidak boleh kosong!',
            'tanggal.required' => 'Harus diisi, tidak boleh kosong!',
            'deskripsi.required' => 'Harus diisi, tidak boleh kosong!',
        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(public_path('img-blog'), $fileName);

        $data = [
            'foto' => $fileName,
            'judul' => Request()->judul,
            'nama_tempat' => Request()->nama_tempat,
            'tanggal' => Request()->tanggal,
            'deskripsi' => Request()->deskripsi,
        ];

        $this->BlogModel->addData($data);
        return redirect()->route('blog')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function detailblog($id)
    {
        if (!$this->BlogModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'blog' => $this->BlogModel->detailData($id),
        ];
        return view('admin.blog.v_detail_blog', $data);
    }

    public function edit($id)
    {
        if (!$this->BlogModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'blog' => $this->BlogModel->detailData($id),
        ];
        return view('admin.blog.v_edit_blog', $data);
    }

    public function edit_aksi($id)
    {
        Request()->validate([
            'judul' => 'required',
            'nama_tempat' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:7024',
        ], [
            'judul.required' => 'Tidak boleh kosong!',
            'nama_tempat.required' => 'Tidak boleh kosong!',
            'tanggal.required' => 'Tidak boleh kosong!',
            'deskripsi.required' => 'Tidak boleh kosong!',
            'foto.required' => 'Harus upload foto!',
        ]);

        if (Request()->foto <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->foto;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(public_path('img-blog'), $fileName);

            $data = [
                'foto' => $fileName,
                'judul' => Request()->judul,
                'nama_tempat' => Request()->nama_tempat,
                'tanggal' => Request()->tanggal,
                'deskripsi' => Request()->deskripsi,
            ];
            $this->BlogModel->editData($id, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'judul' => Request()->judul,
                'nama_tempat' => Request()->nama_tempat,
                'tanggal' => Request()->tanggal,
                'deskripsi' => Request()->deskripsi,
            ];
            $this->BlogModel->editData($id, $data);
        }

        $this->BlogModel->editData($id, $data);
        return redirect()->route('blog')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id)
    {
        $this->BlogModel->deleteData($id);
        return redirect()->route('blog')->with('pesan', 'Data berhasil dihapus');
    }
}
