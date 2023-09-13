<?php

namespace App\Http\Controllers;

use App\Http\Requests\LokasiStoreValidation;
use App\Models\LokasiWisata;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class LokasiWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Destinasi Wisata";
        $submenu = "";

        if ($request->ajax()) {
            $data = LokasiWisata::with('jenislokasinya');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('kunjungan-wisata.index', ["lokasi_id" => $data->id]) . ' "  class="btn btn-outline-success rounded-round mb-2"><i class="mr-2 icon-eye"></i>Data Kunjungan</a>
                            <a href="' . route('lokasi.show', $data->id) . ' "  class="btn btn-outline-info rounded-round mb-2"><i class="mr-2 icon-certificate"></i>Detail</a>
                            <a href="' . route('lokasi.edit', $data->id) . ' "  class="btn btn-outline-warning rounded-round mb-2"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('lokasi.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round mb-2 delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.lokasi.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = "Destinasi Wisata";
        $submenu = "Tambah Destinasi Wisata";
        $subsubmenu = "Tambah Lokasi";
        $title = "";

        return view('admin.lokasi.create', compact('menu', 'submenu', 'subsubmenu', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiStoreValidation $request)
    {
        LokasiWisata::create($request->except('proengsoft_jsvalidation'));

        return redirect(route('lokasi.index'))->with('tambah', 'oke');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = "Data";
        $submenu = "Destinasi Wisata";
        $subsubmenu = "Destinasi Wisata";
        $title = "Destinasi Wisata";
        $data = LokasiWisata::find($id);
        return view('admin.lokasi.show', compact('data', 'menu', 'submenu', 'subsubmenu', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = "Destinasi Wisata";
        $submenu = "Edit Destinasi Wisata";
        $subsubmenu = "Edit Destinasi Wisata";
        $title = "";
        $data = LokasiWisata::where('id', $id)->first();

        return view('admin.lokasi.edit', compact('data', 'menu', 'submenu', 'subsubmenu', 'title'));
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
        $email = $request->validate(
            [
                'email' => 'required|email|unique:users,email,' . $id . ',id',
            ]
        );

        LokasiWisata::find($id)->update($request->except(['proengsoft_jsvalidation', 'email']) + $email);

        return redirect(route('lokasi.index'))->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LokasiWisata::destroy($id);
    }
}