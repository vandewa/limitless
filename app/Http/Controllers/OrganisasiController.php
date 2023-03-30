<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganisasiStoreValidation;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Master";
        $submenu = "Data Organisasi";

        if ($request->ajax()) {
            $data = Organisasi::orderBy('nama', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                         <a href="' . route('organisasi.show', $data->id) . ' "  class="btn btn-outline-success rounded-round"><i class="mr-2 icon-eye"></i>Detail</a>
                            <a href="' . route('organisasi.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('organisasi.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.organisasi.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = "Master";
        $submenu = "Data Organisasi";
        $subsubmenu = "Tambah Organisasi";
        $title = "Tambah Data Organisasi";

        return view('admin.organisasi.create', compact('menu', 'submenu', 'subsubmenu', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganisasiStoreValidation $request)
    {
        Organisasi::create($request->except('proengsoft_jsvalidation'));

        return redirect(route('organisasi.index'))->with('tambah', 'oke');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Organisasi::find($id);
        $menu = "Data Organisasi";
        $submenu = "List Data Organisasi";
        $title = "Detail Data Organisasi";

        return view('admin.organisasi.show', compact('menu', 'submenu', 'data', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = "Master";
        $submenu = "Data Subsektor";
        $subsubmenu = "Edit Subsektor";
        $title = "Edit Data Subsektor";
        $data = Organisasi::find($id);

        return view('admin.organisasi.edit', compact('data', 'menu', 'submenu', 'subsubmenu', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Organisasi::find($id)->update($request->except('proengsoft_jsvalidation'));

        return redirect(route('organisasi.index'))->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisasi  $organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($organisasi)
    {
        Organisasi::destroy($organisasi);
    }
}
