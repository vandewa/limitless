<?php

namespace App\Http\Controllers;

use App\Models\Omzet;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\OmzetStoreValidation;

class OmzetController extends Controller
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
            'tahun' => 'required|unique:omzets,tahun',
        ]);

        Omzet::create([
            'ekraf_id' => $request->ekraf_id,
            'tahun' => $request->tahun,
            'omzet' => $request->omzet
        ]);

        return redirect()->back()->with('omzet', 'oke');
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
        Omzet::destroy($id);
    }

    public function omzet()
    {
        $data = Omzet::orderBy('tahun', 'desc');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div>
                        <a href="' . route('omzet.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table-omzet"><i class="mr-2 icon-trash"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('omzet', function($data){
                return $this->rupiah($data->omzet);
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
}
