<?php

namespace App\Http\Controllers;

use App\Models\KunjunganLokasiWisata;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\LokasiWisata;
use Session;

class KunjunganLokasiWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Data";
        $submenu = "Kunjungan Lokasi Wisata";
        $lokasi = LokasiWisata::find($request->lokasi_id);

        if ($request->ajax()) {
            $data = KunjunganLokasiWisata::where('lokasi_wisata_id', $request->lokasi_id)->select("*");
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('bulan', function ($a) {
                    return get_bulan($a->bulan);
                })
                ->make(true);
        }
        
        return view('admin.kunjungan-wisata.index', compact('menu', 'submenu', 'lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lokasi = LokasiWisata::find($request->lokasi_id);

        return view('admin.kunjungan-wisata.create', compact('lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "kunjungan" => 'required'
        ]);

        $cek = KunjunganLokasiWisata::where('lokasi_wisata_id', $request->lokasi_wisata_id)->where('bulan', (int) date('m'))->where('tahun', date('Y'))->first();

        if (!$cek) {
            $a = KunjunganLokasiWisata::create([
                'lokasi_wisata_id' => $request->lokasi_wisata_id,
                'bulan' => (int) date('m'),
                'tahun' => date('Y'),
                'kunjungan' => $request->kunjungan,

            ]);
        } else {
            $a = $cek->update(['kunjungan' => $request->kunjungan]);
        }


        if ($a) {
            return redirect(url('/'))->with('kunjungan', 'oke');
        }
        return "terjadi masalah";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}