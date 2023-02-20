<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiayaProduksi;
use Laravel\Ui\Presets\React;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\BiayaProduksiStoreValidation;

class BiayaProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'tahun' => 'required|unique:biaya_produksis,tahun',
        ]);

        BiayaProduksi::create([
            "ekraf_id" => $request->ekraf_id,
            'tahun' => $request->tahun,
            'biaya_produksi' => $request->biaya_produksi,
        ]);

        return redirect()->back()->with('biaya', 'oke');
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
        BiayaProduksi::destroy($id);
    }

    public function biaya(Request $request)
    {
        $data = BiayaProduksi::where('ekraf_id', $request->ekraf_id)->orderBy('tahun', 'desc');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div>
                        <a href="' . route('biaya-produksi.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table-produksi"><i class="mr-2 icon-trash"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->rawColumns(['action'])
            ->make(true);

    }

}
