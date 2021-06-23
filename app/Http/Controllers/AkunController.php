<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunModel;

class AkunController extends Controller
{   
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $this->middleware('auth');
    }

    public function index(Request $request){
        $data = [
            'akun' => $this->AkunModel::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'like', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc') ->paginate(2)
        ];
        return view('admin.akun.v_akun', $data);
    }

    public function tambah(){
        return view('admin.akun.v_tambah_akun');
    }

    public function tambah_aksi()
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',    
        ], [
            'name.required' => 'Harus diisi, tidak boleh kosong!',
            'email.required' => 'Harus diisi, tidak boleh kosong!',
            'password.required' => 'Harus diisi, tidak boleh kosong!',
            'alamat.required' => 'Harus diisi, tidak boleh kosong!',
        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->name . '.' . $file->extension();
        $file->move(public_path('img-akun'), $fileName);

        $data = [
            'foto' => $fileName,
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Request()->password,
            'alamat' => Request()->alamat,
        ];

        $this->AkunModel->addData($data);
        return redirect()->route('akun')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function detailakun($id)
    {
        if (!$this->AkunModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id),
        ];
        return view('admin.akun.v_detail_akun', $data);
    }

    public function edit($id)
    {
        if (!$this->AkunModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id),
        ];
        return view('admin.akun.v_edit_akun', $data);
    }

    public function edit_aksi($id)
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'name.required' => 'Harus diisi, tidak boleh kosong!',
            'email.required' => 'Harus diisi, tidak boleh kosong!',
            'password.required' => 'Harus diisi, tidak boleh kosong!',
            'alamat.required' => 'Harus diisi, tidak boleh kosong!',
        ]);

        if (Request()->foto <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->foto;
            $fileName = Request()->name . '.' . $file->extension();
            $file->move(public_path('img-akun'), $fileName);

            $data = [
                'foto' => $fileName,
                'name' => Request()->name,
                'alamat' => Request()->alamat,
                'email' => Request()->email,
                'password' => Request()->password,
            ];
            $this->AkunModel->editData($id, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'name' => Request()->name,
                'alamat' => Request()->alamat,
                'email' => Request()->email,
                'password' => Request()->password,
            ];
            $this->AkunModel->editData($id, $data);
        }

        $this->AkunModel->editData($id, $data);
        return redirect()->route('akun')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id)
    {
        $this->AkunModel->deleteData($id);
        return redirect()->route('akun')->with('pesan', 'Data berhasil dihapus');
    }

    // public function hapusTerpilih(Request $request)
    // {
    //     $checked = Request::input('checked',[]);
    //     if($checked == null) {
    //         return redirect()->route('akun')->with('pesan', 'Tidak ada data yg dihapus');
    //     }else{
    //         $this->AkunModel->deleteSelectData($checked);
    //         return redirect()->route('akun')->with('pesan', 'Data berhasil dihapus');
    //     }
    // }

}
