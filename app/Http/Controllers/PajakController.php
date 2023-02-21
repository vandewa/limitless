<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PajakController extends Controller
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
            'tahun' => 'required|unique:pajaks,tahun',
        ]);

        Pajak::create([
            'ekraf_id' => $request->ekraf_id,
            'tahun' => $request->tahun,
            'pajak' => $request->pajak
        ]);

        return redirect()->back()->with('pajak', 'oke');
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
        Pajak::destroy($id);
    }

    public function pajak()
    {
        $data = Pajak::orderBy('tahun', 'desc');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div>
                        <a href="' . route('pajak.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table-pajak"><i class="mr-2 icon-trash"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->editColumn('pajak', function($data){
                return $this->rupiah($data->pajak);
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
}
