<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsparValidation;
use App\Models\MasterDataUsahaPariwisata;
use App\Models\Uspar;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UsparController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $menu = "Usaha Pariwisata";
        $submenu = "Data Usaha Pariwisata";

        if ($request->ajax()) {
            $data = Uspar::with(['usparnya']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('uspar.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('uspar.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.uspar.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = "Usaha Pariwisata";
        $submenu = "Tambah Data Usaha Pariwisata";
        $subsubmenu = "Tambah Data Usaha Pariwisata";
        $title = "Tambah Data";
        $jup = MasterDataUsahaPariwisata::all()->pluck('jenis_usaha', 'id');

        return view('admin.uspar.create', compact('menu', 'submenu', 'subsubmenu', 'title', 'jup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsparValidation $request)
    {
        Uspar::create([
            'master_data_usaha_pariwisata_id' => $request->master_data_usaha_pariwisata_id,
            'nama_usaha' => $request->nama_usaha,
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tenaga_l' => $request->tenaga_l,
            'tenaga_p' => $request->tenaga_p,
            'izin_dimiliki' => $request->izin_dimiliki,
            'jml_kamar' => $request->jml_kamar,
            'asosiasi' => $request->asosiasi
        ]);

        return redirect(route('uspar.index'))->with('tambah', 'oke');
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
        $menu = "Usaha Pariwisata";
        $submenu = "Ubah Data Usaha Pariwisata";
        $subsubmenu = "Ubah Data Usaha Pariwisata";
        $title = "Ubah Data";
        $data = Uspar::where('id', $id)->first();
        $jup = MasterDataUsahaPariwisata::all()->pluck('jenis_usaha', 'id');

        return view('admin.uspar.edit', compact('data', 'menu', 'submenu', 'subsubmenu', 'title', 'jup'));
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
        Uspar::find($id)->update($request->except(['proengsoft_jsvalidation']));

        return redirect(route('uspar.index'))->with('edit', 'oke');
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
