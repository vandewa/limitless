<?php

namespace App\Http\Controllers;

use App\Models\PelakuWisata;
use App\Models\Subsektor;
use Illuminate\Http\Request;
use App\Models\SubsektorEkraf;
use Yajra\DataTables\Facades\DataTables;
use App\Models\SubsektorPelakuWisata;

class PelakuWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Pelaku Wisata Perorangan";
        $submenu = "List Pelaku Wisata Perorangan";

        if ($request->ajax()) {
            $data = PelakuWisata::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('pelaku.pelaku-wisata.show', $data->id) . ' "  class="btn btn-outline-success rounded-round"><i class="mr-2 icon-eye"></i>Detail</a>
                            <a href="' . route('pelaku.pelaku-wisata.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('pelaku.pelaku-wisata.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pelaku-wisata.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $menu = "Pelaku Wisata Perorangan";
        $submenu = "List Pelaku Wisata Perorangan";
        $subsubmenu = "Tambah Pelaku Wisata Perorangan";
        $title = "Tambah Data Pelaku Wisata Perorangan";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        if ($request->ajax()) {
            $data = PelakuWisata::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('pelaku.pelaku-wisata.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('pelaku.pelaku-wisata.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pelaku-wisata.create', compact('menu', 'submenu', 'subsubmenu', 'title', 'subsektor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekraf = PelakuWisata::create([
            'nama_pemilik' => $request->nama_pemilik,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'jenis_barang_jasa' => $request->jenis_barang_jasa,
            'nama_usaha' => $request->nama_usaha,
            'organisasi_id' => $request->organisasi_id,
            'nomor_hp' => $request->nomor_hp,
            'jml_tenaga' => $request->jml_tenaga
        ]);

        $subsektors = $request->subsektor_id;

        if (!empty($subsektors)) {
            foreach ($subsektors as $subsektor) {
                $ekraf->subsektorEkraf()->create([
                    'subsektor_id' => $subsektor,
                ]);
            }
        }

        return redirect(route('pelaku.pelaku-wisata.index'))->with('tambah', 'oke');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = PelakuWisata::find($id);
        $subsektornya = SubsektorPelakuWisata::with('subsektornya')->where('pelaku_wisata_id', $id)->get()->pluck('subsektornya.id');
        $menu = "Pelaku Wisata Perorangan";
        $submenu = "List Pelaku Wisata Perorangan";
        $title = "Detail Pelaku Wisata Perorangan";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        if ($request->ajax()) {
            $data = PelakuWisata::orderBy('nama_usaha', 'ASC');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('pelaku.pelaku-wisata.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('pelaku.pelaku-wisata.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.pelaku-wisata.show', compact('menu', 'submenu', 'data', 'subsektor', 'title', 'subsektornya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PelakuWisata::find($id);
        $subsektornya = SubsektorPelakuWisata::with('subsektornya')->where('pelaku_wisata_id', $id)->get()->pluck('subsektornya.id');
        $menu = "Pelaku Wisata Perorangan";
        $submenu = "List Pelaku Wisata Perorangan";
        $title = "Edit Pelaku Wisata Perorangan";
        $subsektor = Subsektor::orderBy('nama_subsektor', 'asc')->pluck('nama_subsektor', 'id');

        return view('admin.pelaku-wisata.edit', compact('menu', 'submenu', 'data', 'subsektor', 'title', 'subsektornya'));
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
        $data = PelakuWisata::find($id);
        $data->update($request->except('subsektor_id'));
        $data->subsektorEkraf()->delete();

        $subsektors = $request->subsektor_id;

        if (!empty($subsektors)) {
            foreach ($subsektors as $subsektor) {
                $data->subsektorEkraf()->create([
                    'pelaku_wisata_id' => $data->id,
                    'subsektor_id' => $subsektor,
                ]);
            }
        }

        return redirect(route('pelaku.pelaku-wisata.index'))->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PelakuWisata::destroy($id);
    }
}
