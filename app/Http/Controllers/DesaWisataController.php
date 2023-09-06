<?php

namespace App\Http\Controllers;

use App\Http\Requests\DesaWisataValidation;
use App\Models\DesaWisata;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class DesaWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Data";
        $submenu = "Desa Wisata";

        if ($request->ajax()) {
            $data = DesaWisata::with(['kecamatan', 'kelurahan'])->select("*");
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('desa-wisata.show', $data->id) . ' "  class="btn btn-outline-success rounded-round"><i class="mr-2 icon-eye"></i>Detail</a>
                            <a href="' . route('desa-wisata.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('desa-wisata.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.desa-wisata.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.desa-wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesaWisataValidation $request)
    {
        DesaWisata::create($request->except('proengsoft_jsvalidation'));
        Alert::success('Sukses', 'Data Berhasil di Simpan');
        return redirect(route('desa-wisata.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DesaWisata::find($id);
        return view('admin.desa-wisata.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DesaWisata::with(['kecamatan', 'kelurahan'])->find($id);
        return view('admin.desa-wisata.edit', compact('data'));
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
        $data = DesaWisata::find($id);
        $data->update($request->except("_token"));
        Alert::success('Sukses', 'Data Telah di Perbaharui');
        return redirect(route('desa-wisata.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DesaWisata::destroy($id);
    }
}
