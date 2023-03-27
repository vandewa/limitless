<?php

namespace App\Http\Controllers;

use App\Models\Subsektor;
use App\Models\SubsektorEkraf;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->get();

        return view('list-subsektor', compact('subsektor'));
    }

    public function listSubsektor($id)
    {
        $subsektor = SubsektorEkraf::with(['subsektornya', 'ekrafnya'])->where('subsektor_id', $id)->get();
        $judul = Subsektor::where('id', $id)->first();

        return view('detail-subsektor', compact('subsektor', 'judul'));
    }
}
