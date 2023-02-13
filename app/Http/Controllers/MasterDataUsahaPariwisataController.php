<?php

namespace App\Http\Controllers;

use App\Models\MasterDataUsahaPariwisata;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
                        <a href="' . route('dup.edit', $data->id) . ' " class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i> Edit</a>
                        <a href="' . route('dup.destroy', $data->id) . ' " class="btn btn-simple btn-danger btn-icon delete-data-table"><i class="material-icons">close</i> Delete</a>
                    </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.dup.index');
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
        //
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
    public function edit(MasterDataUsahaPariwisata $masterDataUsahaPariwisata)
    {
        dd('asdas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterDataUsahaPariwisata  $masterDataUsahaPariwisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterDataUsahaPariwisata $masterDataUsahaPariwisata)
    {
        //
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
