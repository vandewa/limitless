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
        $menu = "Master";
        $submenu = "Data Lokasi Wisata";

        if ($request->ajax()) {
            $data = LokasiWisata::with('jenislokasinya')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('lokasi.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('lokasi.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
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
        $menu = "Master";
        $submenu = "Data Lokasi";
        $subsubmenu = "Tambah Lokasi";
        $title = "Tambah Data Lokasi";

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
        $submenu = "Data Lokasi";
        $subsubmenu = "Edit Lokasi";
        $title = "Edit Data Lokasi";
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
