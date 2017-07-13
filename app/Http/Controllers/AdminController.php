<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pesan;

use Session;

class AdminController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function simpan_kritik(Request $request)
    {
       $this->validate($request, array(
            'isi_pesan'   => 'required'
            ));

        Pesan::create($request->all());

        Session::flash('suggestion', 'Semoga Lab NCC Lebih Baik Kedepannya');
        return redirect('/');
    }

    public function kritik_saran()
    {
        $data = Pesan::all();
        return view('backend.admin.kritik_saran', compact('data'));
    }
}
