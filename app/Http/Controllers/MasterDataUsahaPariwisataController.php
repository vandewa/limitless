<?php

namespace App\Http\Controllers;

use App\Models\MasterDataUsahaPariwisata;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class MasterDataUsahaPariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = MasterDataUsahaPariwisata::orderBy('jenis_usaha', 'ASC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                    <div class="list-icons d-flex justify-content-center text-center">
                        <a href="' . route('jenis_usaha.edit', $data->id) . ' " class="btn btn-sm bg-success"><i class="icon-pencil3"></i></a>
                        <a href="' . route('jenis_usaha.destroy', $data->id) . ' " class="btn btn-sm bg-danger delete-data-table"><i class="icon-trash"></i></a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.jenis_usaha.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenis_usaha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_usaha' => 'required',
        ]);

        MasterDataUsahaPariwisata::create($validated);
        Alert::success('Sukses', 'Data Berhasil di Simpan');
        return redirect(route('jenis_usaha.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function show(MasterDataUsahaPariwisata $masterDataUsahaPariwisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MasterDataUsahaPariwisata::find($id);
        return view('admin.jenis_usaha.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_usaha' => 'required',
        ]);

        $data = MasterDataUsahaPariwisata::find($id);
        $data->update($validated);
        Alert::success('Sukses', 'Data Telah di Perbaharui');
        return redirect(route('jenis_usaha.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MasterDataUsahaPariwisata::find($id);
        return $data->delete();
    }
}
