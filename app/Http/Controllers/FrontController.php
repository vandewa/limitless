<?php

namespace App\Http\Controllers;

use App\Models\MasterDataUsahaPariwisata;
use App\Models\Subsektor;
use App\Models\SubsektorEkraf;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->get();
        $uspars = MasterDataUsahaPariwisata::orderBy('jenis_usaha', 'asc')->get();

        return view('front', compact('subsektor', 'uspars'));
    }

    public function listSubsektor($id)
    {
        $subsektor = SubsektorEkraf::with(['subsektornya', 'ekrafnya'])->where('subsektor_id', $id)->get();
        $judul = Subsektor::where('id', $id)->first();

        return view('detail-subsektor', compact('subsektor', 'judul'));
    }
}
