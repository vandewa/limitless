<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Ekraf;
use App\Models\Subsektor;


class DataEkrafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Master";
        $submenu = "Data Ekraf";

        if ($request->ajax()) {
            $data = Ekraf::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('ekraf.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('ekraf.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.ekraf.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $menu = "Master";
        $submenu = "Data Ekraf";
        $subsubmenu = "Tambah Ekraf";
        $title = "Tambah Data Ekraf";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        if ($request->ajax()) {
            $data = Ekraf::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('ekraf.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('ekraf.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.ekraf.create', compact('menu', 'submenu', 'subsubmenu', 'title', 'subsektor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Ekraf::create([
        'nama_pemilik' => $request->nama_pemilik,
        'nik' => $request->nik,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
        'rt' => $request->rt,
        'rw' => $request->rw,
        'kelurahan' => $request->kelurahan,
        'kecamatan' => $request->kecamatan,
        'kabupaten' => $request->kabupaten,
        'jenis_barang_jasa' => $request->jenis_barang_jasa,
        'nama_usaha' => $request->nama_usaha,
        'nama_merek' => $request->nama_merek,
        'hki_status' => $request->hki_status,
        'nomor_hp' => $request->nomor_hp,
        'jml_tenaga' => $request->jml_tenaga
       ]);
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
        $menu = "Master";
        $submenu = "Data Ekraf"; 

        return view('admin.ekraf.edit', compact('menu', 'submenu'));
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
        Ekraf::destroy($id);
    }
}
