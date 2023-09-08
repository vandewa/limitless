<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CertificatePelakuWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Certificate::orderBy('tahun', 'desc');
        // return DataTables::of($data)
        //     ->addIndexColumn()
        //     ->addColumn(
        //         'action',
        //         function ($data) {
        //             $actionBtn = '
        //             <div>
        //                 <a href="' . route('pelaku.certificate.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table-certificate"><i class="mr-2 icon-trash"></i>Delete</a>
        //             </div>';
        //             return $actionBtn;
        //         }
        //     )
        //     ->rawColumns(['action'])
        //     ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'tahun' => 'required|unique:certificates,tahun',
        // ]);

        // return $request->all();

        Certificate::create([
            'pelaku_wisata_id' => $request->pelaku_wisata_id,
            'tanggal' => $request->tanggal,
            'jenis_sertifikat_tp' => $request->jenis_sertifikat_tp,
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'no_registrasi' => $request->no_registrasi,
            'no_sertifikat_bnps' => $request->no_sertifikat_bnps,
        ]);

        return redirect()->back()->with('certificate', 'oke');
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
        Certificate::destroy($id);
    }
}
