<?php

namespace App\Http\Controllers;

use App\Models\Serti;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SertiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'lembaga_penguji' => 'required',
            'nomor_registrasi' => 'required',
            'nomor_bnsp' => 'required',
        ]);

        Serti::create([
            'ekraf_id' => $request->ekraf_id,
            'tahun' => $request->tahun,
            'lembaga_penguji' => $request->lembaga_penguji,
            'nomor_registrasi' => $request->nomor_registrasi,
            'nomor_bnsp' => $request->nomor_bnsp
        ]);

        return redirect()->back()->with('serti', 'oke');
    }

    /**
     * Display the specified resource.
     */
    public function show(Serti $serti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serti $serti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serti $serti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Serti::destroy($id);
    }

    public function serti($id)
    {
        dd($id);
        $data = Serti::where('ekraf_id', $id)->orderBy('tahun', 'desc');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn(
                'action',
                function ($data) {
                    $actionBtn = '
                    <div>
                        <a href="' . route('serti.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table-serti"><i class="mr-2 icon-trash"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                }
            )
            ->rawColumns(['action'])
            ->make(true);
    }
}
