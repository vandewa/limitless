<?php

namespace App\Http\Controllers;

use App\Models\BiayaProduksi;
use Carbon\Carbon;
use App\Models\Ekraf;
use App\Models\Subsektor;
use Illuminate\Http\Request;
use App\Models\SubsektorEkraf;
use Yajra\DataTables\Facades\DataTables;

class DataEkrafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Data Ekraf";
        $submenu = "List Data Ekraf";

        if ($request->ajax()) {
            $data = Ekraf::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('ekraf.show', $data->id) . ' "  class="btn btn-outline-success rounded-round"><i class="mr-2 icon-eye"></i>Detail</a>
                            <a href="' . route('ekraf.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('ekraf.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.ekraf.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $menu = "Data Ekraf";
        $submenu = "List Data Ekraf";
        $subsubmenu = "Tambah Ekraf";
        $title = "Tambah Data Ekraf";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        if ($request->ajax()) {
            $data = Ekraf::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('ekraf.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('ekraf.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.ekraf.create', compact('menu', 'submenu', 'subsubmenu', 'title', 'subsektor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekraf = Ekraf::create([
            'nama_pemilik' => $request->nama_pemilik,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'jenis_barang_jasa' => $request->jenis_barang_jasa,
            'nama_usaha' => $request->nama_usaha,
            'nama_merek' => $request->nama_merek,
            'hki_status' => $request->hki_status,
            'nomor_hp' => $request->nomor_hp,
            'jml_tenaga_laki' => $request->jml_tenaga_laki,
            'jml_tenaga_perempuan' => $request->jml_tenaga_perempuan
        ]);

        $subsektors = $request->subsektor_id;

        foreach ($subsektors as $subsektor) {
            $ekraf->subsektorEkraf()->create([
                'ekraf_id' => $ekraf->id,
                'subsektor_id' => $subsektor,
            ]);
        }

        return redirect(route('ekraf.index'))->with('tambah', 'oke');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = Ekraf::find($id);
        $subsektornya = SubsektorEkraf::with('subsektornya')->where('ekraf_id', $id)->get()->pluck('subsektornya.id');
        $menu = "Data Ekraf";
        $submenu = "List Data Ekraf";
        $title = "Detail Data Ekraf";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        if ($request->ajax()) {
            $data = Ekraf::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('ekraf.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('ekraf.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.ekraf.show', compact('menu', 'submenu', 'data', 'subsektor', 'title', 'subsektornya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Ekraf::find($id);
        $subsektornya = SubsektorEkraf::with('subsektornya')->where('ekraf_id', $id)->get()->pluck('subsektornya.id');
        $menu = "Data Ekraf";
        $submenu = "List Data Ekraf";
        $title = "Edit Data Ekraf";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        return view('admin.ekraf.edit', compact('menu', 'submenu', 'data', 'subsektor', 'title', 'subsektornya'));
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
        $data = Ekraf::find($id);
        $data->update($request->except('subsektor_id'));

        $subsektors = $request->subsektor_id;

        if (!$subsektors == []) {
            foreach ($subsektors as $subsektor) {
                $data->subsektorEkraf()->create([
                    'ekraf_id' => $data->id,
                    'subsektor_id' => $subsektor,
                ]);
            }
        }

        return redirect(route('ekraf.index'))->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ekraf::destroy($id);
    }
}
