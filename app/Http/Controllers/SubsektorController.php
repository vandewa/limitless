<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Subsektor;
use App\Http\Requests\SubsektorStoreValidation;

class SubsektorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Master";
        $submenu = "Data Subsektor";

        if ($request->ajax()) {
            $data = Subsektor::orderBy('nama_subsektor', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('subsektor.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('subsektor.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.subsektor.index', compact('menu', 'submenu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = "Master";
        $submenu = "Data Subsektor";
        $subsubmenu = "Tambah Subsektor";
        $title = "Tambah Data Subsektor";

        return view('admin.subsektor.create', compact('menu', 'submenu', 'subsubmenu', 'title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubsektorStoreValidation $request)
    {
        Subsektor::create([
            'nama_subsektor' => $request->nama_subsektor
        ]);

        return redirect(route('subsektor.index'))->with('tambah', 'oke');
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
        $submenu = "Data Subsektor";
        $subsubmenu = "Edit Subsektor";
        $title = "Edit Data Subsektor";
        $data = Subsektor::find($id);

        return view('admin.subsektor.edit', compact('data','menu', 'submenu', 'subsubmenu', 'title'));
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
        Subsektor::find($id)->update([
            'nama_subsektor' => $request->nama_subsektor
        ]);

        return redirect(route('subsektor.index'))->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subsektor::destroy($id);
    }
}
