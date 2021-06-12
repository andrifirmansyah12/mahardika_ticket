<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketModel;

class TicketController extends Controller
{   
    public function __construct()
    {   
        $this->TicketModel = new TicketModel();
        $this->middleware('auth');
    }
    
    public function index(){
        $data = [
            'film' => $this->TicketModel->allData(),
        ];
        return view('admin.ticket.v_ticket', $data);
    }

    public function tambah(){
        return view('admin.ticket.v_tambah_ticket');
    }

    public function tambah_aksi()
    {
        Request()->validate([
            'judul' => 'required',
            'deskripsi_film' => 'required',
            'harga' => 'required', 
            'diskon' => 'required', 
            'tanggal' => 'required',  
            'hari' => 'required', 
            'jam_tayang' => 'required',  
        ], [
            'judul.required' => 'Harus diisi, tidak boleh kosong!',
            'deskripsi_film.required' => 'Harus diisi, tidak boleh kosong!',
            'harga.required' => 'Harus diisi, tidak boleh kosong!',
            'diskon.required' => 'Harus diisi, tidak boleh kosong!',
            'tanggal.required' => 'Harus diisi, tidak boleh kosong!',
            'hari.required' => 'Harus diisi, tidak boleh kosong!',
            'jam_tayang.required' => 'Harus diisi, tidak boleh kosong!',
        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(public_path('img-film'), $fileName);

        $data = [
            'foto' => $fileName,
            'judul' => Request()->judul,
            'deskripsi_film' => Request()->deskripsi_film,
            'harga' => Request()->harga,
            'diskon' => Request()->diskon,
            'tanggal' => Request()->tanggal,
            'hari' => Request()->hari,
            'jam_tayang' => Request()->jam_tayang,
        ];

        $this->TicketModel->addData($data);
        return redirect()->route('film')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function edit($id)
    {
        if (!$this->TicketModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'film' => $this->TicketModel->detailData($id),
        ];
        return view('admin.ticket.v_edit_ticket', $data);
    }

    public function edit_aksi($id)
    {
        Request()->validate([
            'judul' => 'required',
            'deskripsi_film' => 'required',
            'harga' => 'required', 
            'diskon' => 'required', 
            'tanggal' => 'required',  
            'hari' => 'required', 
            'jam_tayang' => 'required',  
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'judul.required' => 'Harus diisi, tidak boleh kosong!',
            'deskripsi_film.required' => 'Harus diisi, tidak boleh kosong!',
            'harga.required' => 'Harus diisi, tidak boleh kosong!',
            'diskon.required' => 'Harus diisi, tidak boleh kosong!',
            'tanggal.required' => 'Harus diisi, tidak boleh kosong!',
            'hari.required' => 'Harus diisi, tidak boleh kosong!',
            'jam_tayang.required' => 'Harus diisi, tidak boleh kosong!',
        ]);

        if (Request()->foto <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->foto;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(public_path('img-film'), $fileName);

            $data = [
                'foto' => $fileName,
                'judul' => Request()->judul,
                'deskripsi_film' => Request()->deskripsi_film,
                'harga' => Request()->harga,
                'diskon' => Request()->diskon,
                'tanggal' => Request()->tanggal,
                'hari' => Request()->hari,
                'jam_tayang' => Request()->jam_tayang,
            ];
            $this->TicketModel->editData($id, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'judul' => Request()->judul,
                'deskripsi_film' => Request()->deskripsi_film,
                'harga' => Request()->harga,
                'diskon' => Request()->diskon,
                'tanggal' => Request()->tanggal,
                'hari' => Request()->hari,
                'jam_tayang' => Request()->jam_tayang,
            ];
            $this->TicketModel->editData($id, $data);
        }

        $this->TicketModel->editData($id, $data);
        return redirect()->route('film')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id)
    {
        $this->TicketModel->deleteData($id);
        return redirect()->route('film')->with('pesan', 'Data berhasil dihapus');
    }
}
