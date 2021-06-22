<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->middleware('auth');
    }

    public function detailakun($id)
    {
        if (!$this->AkunModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id),
        ];
        return view('admin.profile.v_profile', $data);
    }
}
